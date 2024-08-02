<?php

namespace App\Filament\Pages;

use App\Imports\FiveYearCalculationImport;
use App\Models\FiveYearCalculation;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Maatwebsite\Excel\Facades\Excel;

class FiveYearCalculationPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.five-year-calculation-page';

    protected static ?string $navigationLabel = 'Calculo quinquenio';

    protected static ?string $slug = 'calculo-quinquenio';

    protected static ?string $modelLabel = 'Calculo quinquenio';

    protected static ?string $navigationGroup = 'Datos Empresa';

    protected static ?int $navigationSort = 6;

    public $file;

    public $loading = false;

    public $page = 'calculo';

    public $data;

    public function mount(){
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
            Excel::import(new FiveYearCalculationImport, $this->file);
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
