<?php

namespace App\Filament\Company\Resources\CompanyStudyResource\Pages;

use App\Filament\Company\Resources\CompanyStudyResource;
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
