<?php

namespace App\Filament\Resources\JadwalMonevResource\Pages;

use Filament\Actions;
use App\Models\JadwalMonev;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\JadwalMonevResource;

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
            'semua' => Tab::make('Semua')
                ->modifyQueryUsing(fn(Builder $query) => $query->whereYear('created_at', date('Y'))),
            'mendatang' => Tab::make('Mendatang')
                ->modifyQueryUsing(function (Builder $query) {
                    $user = Auth::user();
                    if (!in_array($user->role, ['Admin', 'Komisi 4'])) {
                        return $query->whereHas('timMonev', function ($query) {
                            $query->where('id_user', Auth::user()->id);
                        })
                        ->where('notulen', false)->whereYear('created_at', date('Y'))->orderBy('tanggal', 'asc');
                    } else {
                        return $query->where('notulen', false)->whereYear('created_at', date('Y'))->orderBy('tanggal', 'asc');
                    }
                })
                ->badge(function () {
                    $user = Auth::user();
                    if (!in_array($user->role, ['Admin', 'Komisi 4'])) {
                        return JadwalMonev::query()->whereHas('timMonev', function ($query) {
                            $query->where('id_user', Auth::user()->id);
                        })
                        ->where('notulen', false)->whereYear('created_at', date('Y'))->count();
                    } else {
                        return JadwalMonev::query()->where('notulen', false)->whereYear('created_at', date('Y'))->count();
                    }
                }),
            'selesai' => Tab::make('Selesai')
                ->modifyQueryUsing(function (Builder $query) {
                    $user = Auth::user();
                    if (!in_array($user->role, ['Admin', 'Komisi 4'])) {
                        return $query->whereHas('timMonev', function ($query) {
                            $query->where('id_user', Auth::user()->id);
                        })
                        ->where('notulen', true)->whereYear('created_at', date('Y'))->orderBy('tanggal', 'desc');
                    } else {
                        return $query->where('notulen', true)->whereYear('created_at', date('Y'))->orderBy('tanggal', 'desc');
                    }
                })
                ->badge(function () {
                    $user = Auth::user();
                    if (!in_array($user->role, ['Admin', 'Komisi 4'])) {
                        return JadwalMonev::query()->whereHas('timMonev', function ($query) {
                            $query->where('id_user', Auth::user()->id);
                        })
                        ->where('notulen', true)->whereYear('created_at', date('Y'))->count();
                    } else {
                        return JadwalMonev::query()->where('notulen', true)->whereYear('created_at', date('Y'))->count();
                    }
                }),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return 'mendatang';
    }
}
