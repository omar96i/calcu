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
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class CompanyStudies extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.company-studies';

    protected static ?string $navigationLabel = 'Calculo pension';

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

    public $smmlv = 0;

    public $K_ = 0;

    public $j = 0;

    public $js = 0;

    public $jm = 0;

    public $i = 0;

    public $TTM = 0;

    public $step = 1;

    public $activeTab;

    public $calcular = "NO";

    public $year_calculation = '2023';

    public $showTable = false;

    public $yeartoimport;

    public $fecha_calculo2 = '';

    public $report_type = 'normal';

    public $companies = [];

    public $selectedCompany = 0;


    public function mount()
    {
        $this->studies = Study::get();
        $this->companies = User::get();
        if (auth()->user()->type_user === 'employee') {
            $this->selectedCompany = auth()->user()->user_id; // Establece el 'user_id' si es 'employee'.
        } else {
            $this->selectedCompany = auth()->user()->id; // Establece el 'id' normal si no es 'employee'.
        }
    }

    public function showTableFunct()
    {
        $this->showTable = true;
    }

    public function closeTable()
    {
        $user = User::find($this->selectedCompany);
        if ($user) {
            $aux = DataGeneral::where('year', $this->year_calculation)->where('type', $this->report_type)->where('type_company', $user->liquidated)->get()->first();
            if ($aux) {
                $this->parametrosd17 = floatval($aux->parametros_17);
                $this->smmlv = floatval($aux->smmlv);
                $this->K_ = floatval($aux->k);
                $this->j = floatval($aux->j);
                $this->js = floatval($aux->js);
                $this->jm = floatval($aux->jm);
                $this->i = floatval($aux->i);
                $this->TTM = floatval($aux->ttm);
                $this->fecha_calculo2 = $aux->fecha_calculo;
            } else {
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
        }
        $this->showTable = false;
    }

    public function updateStates()
    {
        if ($this->j) {
            $this->K_ = ($this->j / (1 + $this->i)) - 1;
            $this->js = pow((1 + $this->j), 1 / 2) - 1;
            $this->jm = pow((1 + $this->j), 1 / 12) - 1;
            $this->TTM = pow((1 + $this->K_), 1 / 12) - 1;
        }
    }

    public function getTitle(): string
    {
        return '';
    }

    public function openModal()
    {
        $this->dispatch('open-modal', id: 'upload-file');
    }

    public function setPage($newPage)
    {
        $this->page = $newPage;
    }

    public function importData()
    {

        if ($this->file) {
            $this->loading = true;
            Excel::import(new StudyImport($this->yeartoimport, $this->report_type, $this->selectedCompany), $this->file);
            Notification::make()
                ->title('Importación completa')
                ->success()
                ->send();
            $this->dispatch('close-modal', id: 'upload-file');
            $this->file = null;
        }
        $this->loading = false;
    }

    public function dowloadExport()
    {
        return Excel::download(new StudyExport($this->year_calculation, $this->report_type, $this->selectedCompany), 'studies.xlsx');
    }

    public function downloadTemplate()
    {
        return Excel::download(new TemplateExport, 'plantilla.xlsx');
    }

    public function getDefaultValue() {}
}
