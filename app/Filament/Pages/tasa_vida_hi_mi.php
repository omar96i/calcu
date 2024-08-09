<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Imports\Tasa_vida_hi_mi_Import;
use App\Filament\Pages\Settings;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Notifications\Notification;

class tasa_vida_hi_mi extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.tasa_vida_hi_mi';

    protected static ?string $navigationLabel = 'tasa_vida_hi_mi';

    protected static ?string $slug = 'tasa_vida_hi_mi';

    protected static ?string $modelLabel = 'tasa_vida_hi_mi';

    protected static ?string $navigationGroup = 'Import';

   // protected static ?int $navigationSort = 2;

    public $file;

    public $loading = false;

    public $page = 'Tasa_vida_hi_mv';

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
            Excel::import(new Tasa_vida_hi_mi_Import(auth()->user()->id), $this->file);
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





