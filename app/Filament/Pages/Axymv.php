<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Imports\Axy_mv_mi_Import;
use App\Filament\Pages\Settings;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Notifications\Notification;

class Axymv extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.axymv';

    protected static ?string $navigationLabel = 'Axymv';

    protected static ?string $slug = 'Axymv';

    protected static ?string $modelLabel = 'Axymv';

    protected static ?string $navigationGroup = 'Import';

   // protected static ?int $navigationSort = 2;

    public $file;

    public $loading = false;

    public $page = 'Axymv';

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
            Excel::import(new Axy_mv_mi_Import(auth()->user()->id), $this->file);
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



