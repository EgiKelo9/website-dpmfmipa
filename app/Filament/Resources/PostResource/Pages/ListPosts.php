<?php

namespace App\Filament\Resources\PostResource\Pages;

use Filament\Actions;
use Filament\Resources\Components\Tab;
use App\Filament\Resources\PostResource;
use App\Models\Post;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus')
                ->label('Feed'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'semua' => Tab::make('Semua')
                ->modifyQueryUsing(fn(Builder $query) => $query->whereYear('created_at', date('Y'))),
            // ->badge(Post::count()),
            'diproses' => Tab::make('Diproses')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('diproses', false)->whereYear('created_at', date('Y')))
                ->badge(Post::where('diproses', false)->whereYear('created_at', date('Y'))->count()),
            'selesai' => Tab::make('Selesai')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('diproses', true)->whereYear('created_at', date('Y')))
                ->badge(Post::where('diproses', true)->whereYear('created_at', date('Y'))->count()),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return 'diproses';
    }
}
