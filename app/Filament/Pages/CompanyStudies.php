<?php

namespace App\Filament\Pages;

use App\Exports\StudyExport;
use App\Exports\TemplateExport;
use App\Models\CompanyStudy;
use App\Imports\CompanyStudyImport;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use App\Filament\Pages\Settings;
use App\Imports\StudyImport;
use App\Models\DataGeneral;
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

    public $K_ = 0;

    public $j = 0;

    public $js = 0;

    public $jm = 0;

    public $i = 0.06793;

    public $TTM = 0.0054917;

    public $step = 1;

    public $activeTab;

    public $calcular = "NO";

    public $year_calculation = '2023';

    public $showTable = false;

    public $yeartoimport;

    public $fecha_calculo2 = '2023-01-01';

    public $report_type = 'normal';


    public function mount(){
        $this->studies = Study::get();
    }

    public function showTableFunct(){
        $this->showTable = true;
    }

    public function closeTable(){
        $aux = DataGeneral::where('user_id', auth()->user()->id)->where('year', $this->year_calculation)->where('type', $this->report_type)->get()->first();
        if($aux){
            $this->parametrosd17 = floatval($aux->parametros_17);
            $this->smmlv = floatval($aux->smmlv);
            $this->K_ = floatval($aux->k);
            $this->j = floatval($aux->j);
            $this->js = floatval($aux->js);
            $this->jm = floatval($aux->jm);
            $this->i = floatval($aux->i);
            $this->TTM = floatval($aux->ttm);
            $this->fecha_calculo2 = $aux->fecha_calculo;
        }else{
            $this->parametrosd17 = 0;
            $this->smmlv = 0;
            $this->K_ = 0;
            $this->j = 0;
            $this->js = 0;
            $this->jm = 0;
            $this->i = 0;
            $this->TTM = 0;
            $this->fecha_calculo2 = '';
        }
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
            Excel::import(new StudyImport($this->yeartoimport, $this->report_type), $this->file);
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
        return Excel::download(new StudyExport($this->year_calculation, $this->report_type), 'studies.xlsx');
    }

    public function downloadTemplate()
    {
        return Excel::download(new TemplateExport, 'plantilla.xlsx');
    }

    public function getDefaultValue(){

    }
}

