<?php

namespace App\Filament\Company\Resources\DataGeneralResource\Pages;

use App\Filament\Company\Resources\DataGeneralResource;
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
