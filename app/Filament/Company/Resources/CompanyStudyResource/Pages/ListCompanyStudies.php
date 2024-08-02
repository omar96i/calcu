<?php

namespace App\Filament\Company\Resources\CompanyStudyResource\Pages;

use App\Filament\Company\Resources\CompanyStudyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyStudies extends ListRecords
{
    protected static string $resource = CompanyStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
