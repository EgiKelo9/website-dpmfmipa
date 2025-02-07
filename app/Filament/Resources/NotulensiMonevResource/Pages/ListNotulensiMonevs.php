<?php

namespace App\Filament\Resources\NotulensiMonevResource\Pages;

use App\Filament\Resources\NotulensiMonevResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNotulensiMonevs extends ListRecords
{
    protected static string $resource = NotulensiMonevResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus')
                ->label('Notulensi Monev'),
        ];
    }
}
