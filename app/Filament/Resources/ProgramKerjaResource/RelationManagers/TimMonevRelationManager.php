<?php

namespace App\Filament\Resources\ProgramKerjaResource\RelationManagers;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Facades\DB;
use Filament\Notifications\Notification;
use App\Notifications\TimMonevAssignment;
use Filament\Resources\RelationManagers\RelationManager;
use Illuminate\Support\Facades\Log;

class TimMonevRelationManager extends RelationManager
{
    protected static string $relationship = 'timMonev';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('username')
                    ->sortable()
                    ->searchable()
                    ->label('Nama Pengguna'),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Nama Lengkap')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('role')
                    ->sortable()
                    ->searchable()
                    ->label('Jabatan')
                    ->toggleable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('role')
                    ->label('Jabatan')
                    ->options([
                        'Inti' => 'Inti',
                        'Komisi 1' => 'Komisi 1',
                        'Komisi 2' => 'Komisi 2',
                        'Komisi 3' => 'Komisi 3',
                        'Komisi 4' => 'Komisi 4',
                        'Komisi 5' => 'Komisi 5',
                    ]),
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->label('Tambah Tim Monev')
                    ->modelLabel('Tim Monev')
                    ->color('primary')
                    ->multiple()
                    ->preloadRecordSelect()
                    ->attachAnother(false)
                    ->beforeFormValidated(function (Tables\Actions\AttachAction $action) {
                        $currentCount = $this->getOwnerRecord()->timMonev()->count();
                        $maxMembers = $this->getOwnerRecord()->jumlah_tim_monev;
                        if ($currentCount >= $maxMembers) {
                            Notification::make()
                                ->title('Batas Tim Monev Tercapai')
                                ->body("Jumlah maksimal tim monev ({$maxMembers} orang) telah tercapai.")
                                ->danger()
                                ->send();
                            $action->halt();
                        }
                    })
                    ->form(fn(Tables\Actions\AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->multiple()
                            ->options(function () {
                                return User::query()
                                    ->whereNot('role', 'Admin')
                                    ->whereNotIn('id', $this->getOwnerRecord()->timMonev->pluck('id'))
                                    ->pluck('name', 'id');
                            })
                            ->maxItems(function () {
                                $currentCount = $this->getOwnerRecord()->timMonev()->count();
                                $maxMembers = $this->getOwnerRecord()->jumlah_tim_monev;
                                return max(0, $maxMembers - $currentCount);
                            })
                            ->required(),
                    ])
            ])
            ->actions([
                Tables\Actions\DetachAction::make()
                    ->label('Lepaskan'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                ]),
            ]);
    }
}
