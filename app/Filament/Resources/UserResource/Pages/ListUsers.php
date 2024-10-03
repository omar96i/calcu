<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        $actions = [
            Action::make('createPDF')
                ->label('Descargar Nota técnica COLGAAP')
                ->color('warning')
                ->url(
                    fn(): string => route('pdf.example', ['user' => Auth::user()]),
                    shouldOpenInNewTab: true
                ),

            Action::make('createPDF_int')
                ->label('Descargar Nota técnica NIIF')
                ->color('warning')
                ->url(
                    fn(): string => route('pdf.example_int', ['user' => Auth::user()]),
                    shouldOpenInNewTab: true
                ),
        ];

        // Verificar si el usuario autenticado tiene el rol 'super_admin'
        if (Auth::user()->hasRole('super_admin')) {
            $actions[] = Actions\CreateAction::make();
        }
        return $actions;
    }
}
