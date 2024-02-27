<?php

namespace App\Filament\Resources\GeneralDataResource\Pages;

use App\Filament\Resources\GeneralDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeneralData extends EditRecord
{
    protected static string $resource = GeneralDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
