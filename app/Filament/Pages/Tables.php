<?php

namespace App\Filament\Pages;

use App\Models\AxyName;
use App\Models\Table;
use Filament\Pages\Page;

class Tables extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.tables';


    public $axy_tables;
    public $tables;

    public $aux_value_1;

    public function mount(){
        $this->axy_tables = AxyName::with('axy_values')->get();
        $this->tables = Table::with('table_values')->get();
    }

}
