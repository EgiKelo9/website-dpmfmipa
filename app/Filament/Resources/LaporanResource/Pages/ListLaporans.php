<?php

namespace App\Filament\Resources\LaporanResource\Pages;

use Filament\Actions;
use App\Models\Laporan;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LaporanResource;

class ListLaporans extends ListRecords
{
    protected static string $resource = LaporanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Laporan')
                ->icon('heroicon-m-plus'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'semua' => Tab::make('Semua')
                ->modifyQueryUsing(fn(Builder $query) => $query->whereYear('created_at', date('Y'))),
            // ->badge(Laporan::count()),
            'lpj' => Tab::make('LPJ')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('type', 'Laporan Pertanggungjawaban')->whereYear('created_at', date('Y')))
                ->badge(Laporan::where('type', 'Laporan Pertanggungjawaban')->whereYear('created_at', date('Y'))->count()),
            'lpjk' => Tab::make('LPJK')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('type', 'Laporan Pertanggungjawaban Keuangan')->whereYear('created_at', date('Y')))
                ->badge(Laporan::where('type', 'Laporan Pertanggungjawaban Keuangan')->whereYear('created_at', date('Y'))->count()),
            'tor' => Tab::make('TOR')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('type', 'Term of References (TOR)')->whereYear('created_at', date('Y')))
                ->badge(Laporan::where('type', 'Term of References (TOR)')->whereYear('created_at', date('Y'))->count()),
            'rab' => Tab::make('RAB')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('type', 'Rancangan Anggaran Biaya')->whereYear('created_at', date('Y')))
                ->badge(Laporan::where('type', 'Rancangan Anggaran Biaya')->whereYear('created_at', date('Y'))->count()),
            'lain' => Tab::make('Lainnya')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('type', 'Laporan Lainnya')->whereYear('created_at', date('Y')))
                ->badge(Laporan::where('type', 'Laporan Lainnya')->whereYear('created_at', date('Y'))->count()),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return 'semua';
    }
}
