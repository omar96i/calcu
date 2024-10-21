<?php

namespace App\Filament\Pages;

use App\Exports\TemplateExportCesantias;
use App\Imports\LayoffImport;
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
            Excel::import(new LayoffImport, $this->file);
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
}
