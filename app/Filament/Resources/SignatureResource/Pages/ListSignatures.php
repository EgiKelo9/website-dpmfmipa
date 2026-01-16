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
            'semua' => Tab::make('Semua')
                ->modifyQueryUsing(fn($query) => $query->whereYear('created_at', date('Y'))),
            // ->badge(Signature::count()),
            'menunggu' => Tab::make('Menunggu')
                ->modifyQueryUsing(fn($query) => $query->whereNull('accepted_at')->whereYear('created_at', date('Y')))
                ->badge(Signature::whereNull('accepted_at')->whereYear('created_at', date('Y'))->count()),
            'ditandai' => Tab::make('Ditandai')
                ->modifyQueryUsing(fn($query) => $query->whereNotNull('accepted_at')->whereYear('created_at', date('Y')))
                ->badge(Signature::whereNotNull('accepted_at')->whereYear('created_at', date('Y'))->count()),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return 'menunggu';
    }
}
