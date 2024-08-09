<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Imports\Tabla_vida_Import;
use App\Filament\Pages\Settings;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Notifications\Notification;

class Tabla_vida_invalidos extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.tabla_vida_invalidos';

    protected static ?string $navigationLabel = 'tabla_vida_invalidos';

    protected static ?string $slug = 'tabla_vida_invalidos';

    protected static ?string $modelLabel = 'tabla_vida_invalidos';

    protected static ?string $navigationGroup = 'Import';

   // protected static ?int $navigationSort = 2;

    public $file;

    public $loading = false;

    public $page = 'tabla_vida_invalidos';

    public $data;


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
            Excel::import(new Tabla_vida_Import(auth()->user()->id), $this->file);
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





