<?php

namespace App\Notifications;

use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;

class TimMonevAssignment extends Notification
{
    use Queueable;
    protected $programKerja;

    public function __construct($programKerja)
    {
        $this->programKerja = $programKerja;
    }

    public function via($notifiable): array
    {
        return ['database'];
    }

    public function toDatabase($notifiable): array
    {
        $data = [
            'title' => 'Penugasan Tim Monev',
            'icon' => 'heroicon-o-bell',
            'iconColor' => 'primary',
            'body' => "Anda telah ditugaskan sebagai tim monev untuk program kerja: {$this->programKerja->name}",
            'actions' => [
                [
                    'label' => 'Lihat Program Kerja',
                    'url' => '/admin/program-kerja/' . $this->programKerja->id,
                ]
            ]
        ];
        return $data;
    }
}
