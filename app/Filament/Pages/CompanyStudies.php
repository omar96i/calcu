<?php

namespace App\Filament\Pages;

use App\Exports\StudyExport;
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

    public $parametrosd17 = 0;

    public $smmlv = 1160000;

    public $K_ = 0.04;

    public $j = 0.11064;

    public $js = 0.05387;

    public $jm = 0.00878;

    public $i = 0.06793;

    public $TTM = 0.0054917;

    public $calcular = "NO";

    public $year_calculation = '2023';

    public $showTable = false;

    public $yeartoimport;

    public $fecha_calculo2 = '2023-01-01';


    public function mount(){
        $this->studies = Study::get();
    }

    public function showTableFunct(){
        $this->showTable = true;
    }

    public function closeTable(){
        $this->showTable = false;

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
            Excel::import(new StudyImport($this->yeartoimport), $this->file);
            Notification::make()
                ->title('Importación completa')
                ->success()
                ->send();
            $this->dispatch('close-modal', id: 'upload-file');
            $this->file = null;
        }
        $this->loading = false;
    }

    public function dowloadExport(){
        return Excel::download(new StudyExport($this->year_calculation), 'studies.xlsx');
    }
}

