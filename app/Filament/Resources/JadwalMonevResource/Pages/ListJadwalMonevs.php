<?php

namespace App\Filament\Resources\JadwalMonevResource\Pages;

use App\Filament\Resources\JadwalMonevResource;
use App\Models\JadwalMonev;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListJadwalMonevs extends ListRecords
{
    protected static string $resource = JadwalMonevResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus')
                ->label('Jadwal Monev'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'semua' => Tab::make('Semua'),
            // ->badge(JadwalMonev::count()),
            'mendatang' => Tab::make('Mendatang')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('notulen', false)->orderBy('tanggal', 'asc'))
                ->badge(JadwalMonev::where('notulen', false)->count()),
            'selesai' => Tab::make('Selesai')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('notulen', true)->orderBy('tanggal', 'desc'))
                ->badge(JadwalMonev::where('notulen', true)->count()),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return 'mendatang';
    }
}
