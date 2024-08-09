<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use BezhanSalleh\PanelSwitch\PanelSwitch;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch) {
            $panelSwitch

            ->visible(fn (): bool => auth()->user()?->hasAnyRole([
                'super_admin',
            ]));
        });

        PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch) {
            $panelSwitch
            ->labels([
                'admin' => 'Administrador',
                'company' => 'Empresa',
                'general_manager' => __('General Manager')
            ]);
        });
        PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch) {
            $panelSwitch->icons([
                'admin' => 'heroicon-o-square-2-stack',
                'company' => 'heroicon-m-document',
            ], $asImage = false);
        });

        Schema::defaultStringLength(191);


    }
}
