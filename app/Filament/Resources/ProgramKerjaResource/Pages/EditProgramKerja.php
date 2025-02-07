<?php

namespace App\Filament\Resources\ProgramKerjaResource\Pages;

use App\Models\User;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ProgramKerjaResource;

class EditProgramKerja extends EditRecord
{
    protected static string $resource = ProgramKerjaResource::class;
    public function getTitle(): string
    {
        return 'Ubah Data ' . $this->getRecord()->name;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $users = $this->getRecord()->timMonev()->pluck('id_user');
        foreach ($users as $user) {
            Notification::make()
                ->success()
                ->title('Penugasan Tim Monev')
                ->body("Anda telah ditugaskan sebagai tim monev untuk program kerja {$this->getRecord()->name}")
                ->sendToDatabase(User::find($user));
        }
    }
}
