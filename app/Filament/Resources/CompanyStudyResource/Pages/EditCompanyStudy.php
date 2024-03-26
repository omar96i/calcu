<?php

namespace App\Filament\Resources\CompanyStudyResource\Pages;

use App\Filament\Resources\CompanyStudyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyStudy extends EditRecord
{
    protected static string $resource = CompanyStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
