<?php

namespace App\Filament\Pages;

use App\Models\BonusA as ModelsBonusA;
use Filament\Pages\Page;

class BonusA extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.bonus-a';

    public $bonus;

    public $parameters_fb;
    public $parameters_tele;

    public function mount(){
        $this->parameters_fb = '1992-06-30'; 
        $this->parameters_tele = [
            ['tele' => 'TELEHUILA', 'fc' => '1967-01-01'],
            ['tele' => 'TELEARMENIA', 'fc' => '1983-05-01'],
            ['tele' => 'TELECALARCA', 'fc' => '1986-01-01'],
            ['tele' => 'TELECAQUETA', 'fc' => '1994-04-01'],
            ['tele' => 'TELEMAICAO', 'fc' => '1994-01-01'],
            ['tele' => 'TELECOM', 'fc' => '1994-04-01'],
            ['tele' => 'TELECARTAGENA', 'fc' => '1994-04-01'],
            ['tele' => 'TELESANTAROSA', 'fc' => '1994-04-01'],
            ['tele' => 'TELESANTAMARTA', 'fc' => '1994-04-01'],
            ['tele' => 'TELENARIÑO', 'fc' => '1994-04-01'],
            ['tele' => 'TELETOLIMA', 'fc' => '1994-04-01'],
        ];
        $this->bonus = ModelsBonusA::all();
    }
    
}
