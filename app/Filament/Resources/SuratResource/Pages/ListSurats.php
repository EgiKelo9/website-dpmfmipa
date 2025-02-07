<?php

namespace App\Filament\Resources\SuratResource\Pages;

use App\Models\Surat;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use App\Filament\Resources\SuratResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListSurats extends ListRecords
{
    protected static string $resource = SuratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus')
                ->label('Surat'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'semua' => Tab::make('Semua'),
            // ->badge(Surat::count()),
            'masuk' => Tab::make('Surat Masuk')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('type', 'Surat Masuk'))
                ->badge(Surat::where('type', 'Surat Masuk')->count()),
            'keluar' => Tab::make('Surat Keluar')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('type', 'Surat Keluar'))
                ->badge(Surat::where('type', 'Surat Keluar')->count()),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return 'masuk';
    }
}
