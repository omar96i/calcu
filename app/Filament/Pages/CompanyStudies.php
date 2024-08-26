<?php

namespace App\Filament\Pages;

use App\Models\CompanyStudy;
use App\Imports\CompanyStudyImport;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use App\Filament\Pages\Settings;
use App\Imports\StudyImport;
use App\Models\Study;
use Maatwebsite\Excel\Facades\Excel;

class CompanyStudies extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.company-studies';

    protected static ?string $navigationLabel = 'Calculopension';

    protected static ?string $slug = 'calculopension';

    protected static ?string $modelLabel = 'Calculo Pension';

    protected static ?string $navigationGroup = 'Datos Empresa';

    protected static ?int $navigationSort = 2;

    public $file;

    public $loading = false;

    public $page = 'calculopension';

    public $data;

    public $date = '2023-01-01';

    public $studies;

    public function mount(){
        $this->studies = Study::get();
    }

    public function getTitle(): string
    {
        return '';
    }

    public function openModal(){
        $this->dispatch('open-modal', id: 'upload-file');
    }

    public function setPage($newPage){
        $this->page = $newPage;
    }

    public function importData(){

        if($this->file){
            $this->loading = true;
            Excel::import(new StudyImport($this->date), $this->file);
            Notification::make()
                ->title('Importación completa')
                ->success()
                ->send();
            $this->dispatch('close-modal', id: 'upload-file');
            $this->file = null;
        }
        $this->loading = false;
    }
}

