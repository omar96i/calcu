<?php

namespace App\Filament\Pages;

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

    public $file;

    public $loading = false;

    public $page = 'calculo';

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
}
