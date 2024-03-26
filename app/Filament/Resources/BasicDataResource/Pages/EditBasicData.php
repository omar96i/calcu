<?php

namespace App\Filament\Resources\BasicDataResource\Pages;

use App\Filament\Resources\BasicDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBasicData extends EditRecord
{
    protected static string $resource = BasicDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
