<?php

namespace App\Filament\Resources\DataGeneralResource\Pages;

use App\Filament\Resources\DataGeneralResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataGenerals extends ListRecords
{
    protected static string $resource = DataGeneralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
