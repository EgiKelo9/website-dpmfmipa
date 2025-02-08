<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Navigation\MenuItem;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Auth;
use Filament\Navigation\NavigationGroup;
use Filament\Notifications\Notification;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Joaopaulolndev\FilamentEditProfile\Pages\EditProfilePage;
use Joaopaulolndev\FilamentEditProfile\FilamentEditProfilePlugin;
use App\Filament\Resources\UserResource\Widgets\JadwalMonevWidget;
use App\Filament\Resources\UserResource\Widgets\ProgramKerjaWidget;
use App\Filament\Resources\UserResource\Widgets\RingkasanWidget;
use App\Filament\Resources\UserResource\Widgets\SuratWidget;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->spa()
            ->login()
            ->passwordReset()
            ->sidebarCollapsibleOnDesktop()
            ->sidebarWidth('18rem')
            ->colors([
                'primary' => Color::Amber,
            ])
            ->plugins([
                FilamentEditProfilePlugin::make()
                    ->shouldShowDeleteAccountForm(false)
                    ->setNavigationLabel('Profil Saya')
                    ->setTitle('Profil Saya')
                    ->slug('profil-saya')
                    ->setIcon('heroicon-o-user')
            ])
            ->userMenuItems([
                'profile' => MenuItem::make()
                    ->icon('heroicon-s-user-circle')
                    ->label(fn (): string => Auth::user()->username)
                    ->url(fn (): string => EditProfilePage::getUrl())
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                RingkasanWidget::class,
                SuratWidget::class,
                JadwalMonevWidget::class,
                ProgramKerjaWidget::class,
            ])
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Monitoring & Evaluasi'),
                NavigationGroup::make()
                    ->label('Kelola Dokumen'),
                NavigationGroup::make()
                    ->label('Kelola Media Sosial'),
                NavigationGroup::make()
                    ->label('Kelola Aspirasi'),
                NavigationGroup::make()
                    ->label('Kelola Organisasi'),
                NavigationGroup::make()
                    ->label('Kelola Individu'),
            ])
            ->databaseNotifications()
            ->databaseNotificationsPolling('30s')
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
