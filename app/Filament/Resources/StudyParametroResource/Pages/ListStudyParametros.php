<?php

namespace App\Filament\Resources\StudyParametroResource\Pages;

use App\Filament\Resources\StudyParametroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudyParametros extends ListRecords
{
    protected static string $resource = StudyParametroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
