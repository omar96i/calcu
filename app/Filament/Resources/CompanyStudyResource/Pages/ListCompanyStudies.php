<?php

namespace App\Filament\Resources\CompanyStudyResource\Pages;

use App\Filament\Resources\CompanyStudyResource;
use App\Imports\AuxImport;
use App\Imports\CompanyStudyImport;
use App\Models\Company;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;

class ListCompanyStudies extends ListRecords
{
    protected static string $resource = CompanyStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public $file;
    public $company_id;

    public function getHeader(): ?View
    {
        $companies = Company::get();
        $data = Actions\CreateAction::make()->label('Nuevo registro');
        return view('filament.custom.upload-file', compact('data', 'companies'));
    }



    public function save(){
        //Excel::import(new CompanyStudyImport(intval($this->company_id)), $this->file);
        Excel::import(new AuxImport(), $this->file);

        $this->dispatch('close-modal', id: 'study_dates');
    }
}
