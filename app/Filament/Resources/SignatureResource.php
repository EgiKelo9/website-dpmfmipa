<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SignatureResource\Pages;
use App\Filament\Resources\SignatureResource\RelationManagers;
use App\Http\Controllers\SignatureController;
use App\Models\Lembaga;
use App\Models\Signature;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SignatureResource extends Resource
{
    protected static ?string $model = Signature::class;
    protected static ?string $navigationGroup = 'Kelola Dokumen';
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $label = 'Tanda Tangan Elektronik';
    protected static ?string $slug = 'tanda-tangan-elektronik';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\TextInput::make('nomor')
                        ->required()
                        ->maxLength(255)
                        ->label('Nomor Surat')
                        ->placeholder('Masukkan Nomor Surat')
                        ->columnSpanFull(),
                    Forms\Components\Select::make('id_lembaga')
                        ->required()
                        ->options(function () {
                            return Lembaga::pluck('username', 'id');
                        })
                        ->columnSpanFull()
                        ->searchable()
                        ->label('Lembaga Pemohon'),
                    Forms\Components\Textarea::make('keperluan')
                        ->label('Keperluan')
                        ->placeholder('Masukkan Keperluan TTE')
                        ->required()
                        ->columnSpanFull(),
                ])->columnSpan(['md' => 1]),
                Forms\Components\Section::make([
                    Forms\Components\Select::make('id_user')
                        ->required()
                        ->options(function () {
                            return User::whereIn('role', ['Admin', 'Inti'])
                                ->pluck('name', 'id');
                        })
                        ->default(function () {
                            return User::where('specifiedRole', 'Ketua')
                                ->latest()
                                ->first()
                                ->id;
                        })
                        ->columnSpanFull()
                        ->searchable()
                        ->label('Penanda Tangan'),
                    Forms\Components\FileUpload::make('file')
                        ->required()
                        ->disk('public')
                        ->directory('file-tte')
                        ->label('File Surat')
                        ->downloadable()
                        ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                        ->getUploadedFileNameForStorageUsing(
                            function (TemporaryUploadedFile $file) {
                                return $file->getClientOriginalName();
                            },
                        )
                        ->afterStateUpdated(function ($state, Forms\Set $set) {
                            $extensions = ['.pdf', '.docx'];
                            $filename = $state->getClientOriginalName();
                            foreach ($extensions as $extension) {
                                if (str_ends_with($filename, $extension)) {
                                    $filename = str_replace($extension, '', $filename);
                                }
                            }
                            $set('title', $filename);
                        })
                        ->visibility('public')
                        ->columnSpanFull()
                        ->helperText('Format yang diterima: PDF, DOCX.'),
                ])->columnSpan(['md' => 1]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor')
                    ->label('Nomor Surat')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('lembaga.username')
                    ->label('Lembaga')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('keperluan')
                    ->label('Keperluan')
                    ->sortable()
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\CheckboxColumn::make('accepted_at')
                    ->label('Tandai')
                    ->updateStateUsing(function ($record, $state) {
                        if ($state) {
                            $signatureController = new SignatureController();
                            $qrCodePath = $signatureController->generateQRCode($record->unique_link, $record->nomor);
                            $record->update([
                                'accepted_at' => now(),
                                'qr_code' => $qrCodePath,
                            ]);
                            Notification::make()
                                ->title('Permohonan TTE telah ditandatangani')
                                ->success()
                                ->duration(5000)
                                ->send();
                        } else {
                            $record->update([
                                'accepted_at' => null,
                                'qr_code' => null,
                            ]);
                            Notification::make()
                                ->title('Permohonan TTE batal ditandatangani')
                                ->danger()
                                ->duration(5000)
                                ->send();
                        }
                    }),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\Action::make('Unduh QR')
                        ->icon('heroicon-o-arrow-down-tray')
                        ->label('Unduh')
                        ->url(fn($record): string => route('signature.download-qr', ['nomor' => str_replace('/', '_', $record->nomor)]), shouldOpenInNewTab: true)
                        ->openUrlInNewTab()
                        ->successRedirectUrl(route('filament.admin.resources.tanda-tangan-elektronik.index'))
                        ->visible(fn($record) => $record->qr_code !== null),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                        ->successRedirectUrl(route('filament.admin.resources.tanda-tangan-elektronik.index')),
                    Tables\Actions\RestoreAction::make()
                        ->successRedirectUrl(route('filament.admin.resources.tanda-tangan-elektronik.index')),
                    Tables\Actions\ForceDeleteAction::make()
                        ->successRedirectUrl(route('filament.admin.resources.tanda-tangan-elektronik.index')),
                ])->visible(fn() => in_array(Auth::user()->role, ['Admin', 'Inti'])),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->requiresConfirmation()
                        ->action(fn(Collection $records) => $records->each->delete())
                        ->deselectRecordsAfterCompletion(),
                    Tables\Actions\RestoreBulkAction::make()
                        ->requiresConfirmation()
                        ->action(fn(Collection $records) => $records->each->restore())
                        ->deselectRecordsAfterCompletion(),
                    Tables\Actions\ForceDeleteBulkAction::make()
                        ->requiresConfirmation()
                        ->action(fn(Collection $records) => $records->each->forceDelete())
                        ->deselectRecordsAfterCompletion(),
                ])->visible(fn() => in_array(Auth::user()->role, ['Admin', 'Inti'])),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSignatures::route('/'),
            'create' => Pages\CreateSignature::route('/create'),
            'view' => Pages\ViewSignature::route('/{record}'),
            'edit' => Pages\EditSignature::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
