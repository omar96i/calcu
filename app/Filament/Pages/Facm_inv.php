<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Imports\Facm_inv_Import;
use App\Filament\Pages\Settings;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Notifications\Notification;

class Facm_inv extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.facm_inv';

    protected static ?string $navigationLabel = 'facm_inv';

    protected static ?string $slug = 'facm_inv';

    protected static ?string $modelLabel = 'facm_inv';

    protected static ?string $navigationGroup = 'Import';

   // protected static ?int $navigationSort = 2;

    public $file;

    public $loading = false;

    public $page = 'facm_inv';

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
            Excel::import(new Facm_inv_Import(auth()->user()->id), $this->file);
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






