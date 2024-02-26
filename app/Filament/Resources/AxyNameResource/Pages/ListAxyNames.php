<?php

namespace App\Filament\Resources\AxyNameResource\Pages;

use App\Filament\Resources\AxyNameResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAxyNames extends ListRecords
{
    protected static string $resource = AxyNameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
