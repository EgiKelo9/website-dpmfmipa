<?php

namespace App\Filament\Resources\SignatureResource\Pages;

use App\Filament\Resources\SignatureResource;
use App\Models\Signature;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListSignatures extends ListRecords
{
    protected static string $resource = SignatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus')
                ->label('Tanda Tangan'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'semua' => Tab::make('Semua'),
            // ->badge(Signature::count()),
            'menunggu' => Tab::make('Menunggu')
                ->modifyQueryUsing(fn($query) => $query->whereNull('accepted_at'))
                ->badge(Signature::whereNull('accepted_at')->count()),
            'ditandai' => Tab::make('Ditandai')
                ->modifyQueryUsing(fn($query) => $query->whereNotNull('accepted_at'))
                ->badge(Signature::whereNotNull('accepted_at')->count()),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return 'menunggu';
    }
}
