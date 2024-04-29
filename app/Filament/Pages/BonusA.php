<?php

namespace App\Filament\Pages;

use App\Models\BonusA as ModelsBonusA;
use App\Models\DTFP;
use App\Models\Fac_A;
use App\Models\GeneralData;
use App\Models\NationalAverageSalary;
use Carbon\Carbon;
use Filament\Pages\Page;

class BonusA extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.bonus-a';

    public $bonus;

    public $parameters_fb;
    public $parameters_tele;
    public $smn;

    public function mount()
    {
        $this->smn =
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

    public function getSmn($item_edad_referencia)
    {
        return $record = NationalAverageSalary::where('age', floor($item_edad_referencia))->first();
    }

    public function getAccumulatedDTFP($item_fb)
    {
        $item_fb = Carbon::parse($item_fb);

        $record = DTFP::whereDate('date', '<=', $item_fb)
            ->orderBy('date', 'desc')
            ->first();

        return isset($record) ? $record->accumulated : 0;
    }

    public function getMinimumSalary($item_fc)
    {
        $item_fc = Carbon::parse($item_fc);

        $record = GeneralData::where('calculation_year', $item_fc->year)->first();

        return isset($record) ? $record->minimum_salary : null;
    }

    public function getFac($item_edad_referencia)
    {
        $record = Fac_A::where('age', intVal($item_edad_referencia))->first();

        return isset($record) ? $record : null;
    }
}
