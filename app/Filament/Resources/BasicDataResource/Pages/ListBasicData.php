<?php

namespace App\Filament\Resources\BasicDataResource\Pages;

use App\Filament\Resources\BasicDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBasicData extends ListRecords
{
    protected static string $resource = BasicDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
