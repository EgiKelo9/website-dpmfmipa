<?php

namespace App\Filament\Resources\SuratResource\Pages;

use App\Filament\Resources\SuratResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSurat extends ViewRecord
{
    protected static string $resource = SuratResource::class;
    public function getTitle(): string
    {
        return 'Lihat ' . $this->getRecord()->title;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
