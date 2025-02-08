<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\Surat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SuratWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Surat Masuk', function () {
                $surats = Surat::where('type', 'Surat Masuk')->count();
                return "{$surats} Surat";
            }),
            Stat::make('Surat Keluar', function () {
                $surats = Surat::where('type', 'Surat Keluar')->count();
                return "{$surats} Surat";
            }),
            Stat::make('Total Surat', function () {
                $surats = Surat::count();
                return "{$surats} Surat";
            }),
        ];
    }
}
