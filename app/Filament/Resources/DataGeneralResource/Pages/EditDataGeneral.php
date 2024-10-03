<?php

namespace App\Filament\Resources\DataGeneralResource\Pages;

use App\Filament\Resources\DataGeneralResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataGeneral extends EditRecord
{
    protected static string $resource = DataGeneralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
