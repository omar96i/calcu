<?php

namespace App\Filament\Resources\StudyParametroResource\Pages;

use App\Filament\Resources\StudyParametroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudyParametro extends EditRecord
{
    protected static string $resource = StudyParametroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
