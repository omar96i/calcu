<?php

namespace App\Filament\Pages;

use App\Exports\TemplateExportCesantias;
use App\Imports\LayoffImport;
use App\Models\User;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Maatwebsite\Excel\Facades\Excel;

class LayoffsPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.layoffs-page';

    protected static ?string $navigationLabel = 'Cesantias';

    protected static ?string $slug = 'cesantias';

    protected static ?string $modelLabel = 'Cesantias';

    protected static ?string $navigationGroup = 'Datos Empresa';

    protected static ?int $navigationSort = 5;

    public $file;

    public $loading = false;

    public $page = 'calculo';

    public $data;

    public $step = 1;

    public $companies = [];

    public $selectedCompany = 0;

    public $year_calculation = '2023';

    public $closeTable = false;

    public function mount()
    {
        $this->companies = User::get();
        if (auth()->user()->type_user === 'employee') {
            $this->selectedCompany = auth()->user()->user_id; // Establece el 'user_id' si es 'employee'.
        } else {
            $this->selectedCompany = auth()->user()->id; // Establece el 'id' normal si no es 'employee'.
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
            Excel::import(new LayoffImport($this->selectedCompany, $this->year_calculation), $this->file);
            Notification::make()
                ->title('Importación completa')
                ->success()
                ->send();
            $this->dispatch('close-modal', id: 'upload-file');
            $this->file = null;
        }
        $this->loading = false;
    }

    public function downloadTemplate()
    {
        return Excel::download(new TemplateExportCesantias, 'plantilla_cesantias.xlsx');
    }

    public function closeTableAction()
    {
        $this->closeTable = false;
    }

    public function showTableFunct()
    {
        $this->closeTable = true;
    }
}
