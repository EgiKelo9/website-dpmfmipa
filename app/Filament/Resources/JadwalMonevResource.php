<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalMonevResource\Pages;
use App\Filament\Resources\JadwalMonevResource\RelationManagers;
use App\Filament\Resources\JadwalMonevResource\RelationManagers\TimMonevRelationManager;
use App\Models\JadwalMonev;
use App\Models\ProgramKerja;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class JadwalMonevResource extends Resource
{
    protected static ?string $model = JadwalMonev::class;
    protected static ?string $navigationGroup = 'Monitoring & Evaluasi';
    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $label = 'Jadwal Monev';
    protected static ?string $slug = 'jadwal-monev';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(['md' => 2])
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->label('Nama Kegiatan')
                        ->placeholder('Masukkan Nama Kegiatan'),
                    Forms\Components\Select::make('id_proker')
                        ->required()
                        ->options(function () {
                            $userRole = Auth::user()->role;
                            if ($userRole === 'Admin' || $userRole === 'Komisi 4') {
                                return ProgramKerja::pluck('name', 'id');
                            } else {
                                return ProgramKerja::whereHas('timMonev', function ($query) {
                                    $query->where('id_user', Auth::user()->id);
                                })->pluck('name', 'id');
                            }
                        })
                        ->searchable()
                        ->label('Program Kerja'),
                    Forms\Components\TextInput::make('jumlah_tim_monev')
                        ->required()
                        ->numeric()
                        ->suffix('Orang')
                        ->label('Jumlah Tim Monev')
                        ->placeholder('Masukkan Jumlah Tim'),
                ])->columnSpan(['md' => 1]),
                Forms\Components\Section::make([
                    Forms\Components\Grid::make(['md' => 2])
                        ->schema([
                            Forms\Components\DatePicker::make('tanggal')
                                ->required()
                                ->locale('id')
                                ->label('Tanggal Kegiatan')
                                ->native(false)
                                ->displayFormat('j F Y')
                                ->prefixIcon('heroicon-o-calendar')
                                ->placeholder('Masukkan Tanggal Kegiatan')
                                ->columnSpanFull(),
                            Forms\Components\TextInput::make('lokasi')
                                ->required()
                                ->label('Lokasi Kegiatan')
                                ->prefixIcon('heroicon-o-map-pin')
                                ->placeholder('Masukkan Lokasi Kegiatan')
                                ->columnSpanFull(),
                            Forms\Components\TimePicker::make('start_time')
                                ->required()
                                ->seconds(false)
                                ->label('Waktu Mulai')
                                ->suffix('WITA')
                                ->native(false)
                                ->placeholder('HH:mm')
                                ->columnSpan(['md' => 1]),
                            Forms\Components\TimePicker::make('end_time')
                                ->required()
                                ->seconds(false)
                                ->label('Waktu Selesai')
                                ->suffix('WITA')
                                ->native(false)
                                ->placeholder('HH:mm')
                                ->columnSpan(['md' => 1]),
                        ]),
                ])->columnSpan(['md' => 1]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('tanggal', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Kegiatan'),
                Tables\Columns\TextColumn::make('programKerja.name')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->label('Nama Program Kerja'),
                Tables\Columns\TextColumn::make('jumlah_tim_monev')
                    ->numeric()
                    ->label('Tim Monev')
                    ->suffix(' Orang'),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable()
                    ->datetime('l, j M Y'),
                Tables\Columns\TextColumn::make('start_time')
                    ->time('H:i')
                    ->label('Mulai'),
                Tables\Columns\TextColumn::make('end_time')
                    ->time('H:i')
                    ->label('Selesai'),
            ])
            ->filters([
                Tables\Filters\Filter::make('tanggal')
                    ->form([
                        Forms\Components\DatePicker::make('tanggal_kegiatan')
                            ->native(false)
                            ->displayFormat('j F Y')
                            ->placeholder('Pilih Tanggal Kegiatan'),
                        Forms\Components\Select::make('bulan_kegiatan')
                            ->options([
                                '01' => 'Januari',
                                '02' => 'Februari',
                                '03' => 'Maret',
                                '04' => 'April',
                                '05' => 'Mei',
                                '06' => 'Juni',
                                '07' => 'Juli',
                                '08' => 'Agustus',
                                '09' => 'September',
                                '10' => 'Oktober',
                                '11' => 'November',
                                '12' => 'Desember',
                            ]),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['tanggal_kegiatan'],
                                fn (Builder $query, $date): Builder => $query->whereDate('tanggal', '=', $date),
                            )
                            ->when(
                                $data['bulan_kegiatan'],
                                fn (Builder $query, $month): Builder => $query->whereMonth('tanggal', '=', $month),
                            );
                    }),
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                        ->successRedirectUrl(route('filament.admin.resources.jadwal-monev.index')),
                    Tables\Actions\RestoreAction::make()
                        ->successRedirectUrl(route('filament.admin.resources.jadwal-monev.index')),
                    Tables\Actions\ForceDeleteAction::make()
                        ->successRedirectUrl(route('filament.admin.resources.jadwal-monev.index')),
                ])->visible(fn () => in_array(Auth::user()->role, ['Admin', 'Komisi 4'])),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->requiresConfirmation()
                        ->action(fn (Collection $records) => $records->each->delete())
                        ->deselectRecordsAfterCompletion(),
                    Tables\Actions\RestoreBulkAction::make()
                        ->requiresConfirmation()
                        ->action(fn (Collection $records) => $records->each->restore())
                        ->deselectRecordsAfterCompletion(),
                    Tables\Actions\ForceDeleteBulkAction::make()
                        ->requiresConfirmation()
                        ->action(fn (Collection $records) => $records->each->forceDelete())
                        ->deselectRecordsAfterCompletion(),
                ])->visible(fn () => in_array(Auth::user()->role, ['Admin', 'Komisi 4'])),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            TimMonevRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwalMonevs::route('/'),
            'create' => Pages\CreateJadwalMonev::route('/create'),
            'view' => Pages\ViewJadwalMonev::route('/{record}'),
            'edit' => Pages\EditJadwalMonev::route('/{record}/edit'),
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
