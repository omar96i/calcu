<?php

namespace App\Filament\Pages;

use App\Exports\TemplateExportTitleCalculation;
use App\Imports\TitleCalculationImport;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Maatwebsite\Excel\Facades\Excel;

class TitleCalculation extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.title-calculation';

    protected static ?string $navigationLabel = 'Calculos de titulos';

    protected static ?string $slug = 'calculo-titulos';

    protected static ?string $modelLabel = 'Calculos de titulos';

    protected static ?string $navigationGroup = 'Datos Empresa';

    protected static ?int $navigationSort = 7;

    public $file;

    public $loading = false;

    public $page = 'calculo-masivo';

    public $step = 1;

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
            Excel::import(new TitleCalculationImport, $this->file);
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
        return Excel::download(new TemplateExportTitleCalculation, 'plantilla_titulos.xlsx');
    }

}
