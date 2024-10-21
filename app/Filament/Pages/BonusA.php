<?php

namespace App\Filament\Pages;

use App\Exports\TemplateExportBonusA;
use App\Imports\BonusAImport;
use App\Models\BonusA as ModelsBonusA;
use App\Models\DTFP;
use App\Models\Fac_A;
use App\Models\GeneralData;
use App\Models\NationalAverageSalary;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Maatwebsite\Excel\Facades\Excel;

class BonusA extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.bonus-a';

    protected static ?string $navigationGroup = 'Datos Empresa';

    protected static ?int $navigationSort = 3;

    public $bonus;

    public $parameters_fb;
    public $parameters_tele;
    public $smn;

    public $file;

    public $loading = false;

    public $page = 'bonus-a';

    public $step = 1;

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
        return $record = NationalAverageSalary::where('age', intval($item_edad_referencia))->first();
    }

    public function openModal()
    {
        $this->dispatch('open-modal', id: 'upload-file');
    }

    public function setPage($newPage)
    {
        $this->page = $newPage;
    }

    public function importData()
    {

        if ($this->file) {
            $this->loading = true;
            Excel::import(new BonusAImport(), $this->file);
            Notification::make()
                ->title('Importación completa')
                ->success()
                ->send();
            $this->dispatch('close-modal', id: 'upload-file');
            $this->file = null;
        }
        $this->loading = false;
    }

    public function getAccumulatedDTFP($item_fb)
    {
        $item_fb = Carbon::parse($item_fb);

        $record = DTFP::whereDate('date', '<=', $item_fb)
            ->orderBy('date', 'desc')
            ->first();

        return isset($record) ? $record->accumulated : 0;
    }

    public function getDTFP($date)
    {
        $record = DTFP::whereDate('date', '<=', $date)
            ->orderBy('date', 'desc')
            ->first();

        return isset($record) ? $record : 0;
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

    public function updateState(
        $id,
        $bonus_a_l,
        $bonus_a_m,
        $bonus_a_n,
        $bonus_a_o,
        $bonus_a_p,
        $bonus_a_q,
        $bonus_a_r,
        $bonus_a_s,
        $bonus_a_t,
        $bonus_a_u,
        $bonus_a_v,
        $bonus_a_w,
        $bonus_a_x,
        $bonus_a_y,
        $bonus_a_z,
        $bonus_a_aa,
        $bonus_a_ab,
        $bonus_a_ac,
        $bonus_a_ad,
        $bonus_a_ae,
        $bonus_a_af,
        $bonus_a_ag,
        $bonus_a_ah,
        $bonus_a_ai,
        $bonus_a_aj,
        $bonus_a_ak,
        $bonus_a_al,
        $bonus_a_am,
        $bonus_a_an,
        $bonus_a_ao,
        $bonus_a_ap,
        $bonus_a_aq,
        $bonus_a_ar,
        $bonus_a_as,
        $bonus_a_at,
        $bonus_a_au,
        $bonus_a_av,
    ) {
        $bonus = ModelsBonusA::find($id);
        $bonus->update([
            'user_id' => auth()->user()->id,
            'bonus_a_l' => $bonus_a_l,
            'bonus_a_m' => $bonus_a_m,
            'bonus_a_n' => $bonus_a_n,
            'bonus_a_o' => $bonus_a_o,
            'bonus_a_p' => $bonus_a_p,
            'bonus_a_q' => $bonus_a_q,
            'bonus_a_r' => $bonus_a_r,
            'bonus_a_s' => $bonus_a_s,
            'bonus_a_t' => $bonus_a_t,
            'bonus_a_u' => $bonus_a_u,
            'bonus_a_v' => $bonus_a_v,
            'bonus_a_w' => $bonus_a_w,
            'bonus_a_x' => $bonus_a_x,
            'bonus_a_y' => $bonus_a_y,
            'bonus_a_z' => $bonus_a_z,
            'bonus_a_aa' => $bonus_a_aa,
            'bonus_a_ab' => $bonus_a_ab,
            'bonus_a_ac' => $bonus_a_ac,
            'bonus_a_ad' => $bonus_a_ad,
            'bonus_a_ae' => $bonus_a_ae,
            'bonus_a_af' => $bonus_a_af,
            'bonus_a_ag' => $bonus_a_ag,
            'bonus_a_ah' => $bonus_a_ah,
            'bonus_a_ai' => $bonus_a_ai,
            'bonus_a_aj' => $bonus_a_aj,
            'bonus_a_ak' => $bonus_a_ak,
            'bonus_a_al' => $bonus_a_al,
            'bonus_a_am' => $bonus_a_am,
            'bonus_a_an' => $bonus_a_an,
            'bonus_a_ao' => $bonus_a_ao,
            'bonus_a_ap' => $bonus_a_ap,
            'bonus_a_aq' => $bonus_a_aq,
            'bonus_a_ar' => $bonus_a_ar,
            'bonus_a_as' => $bonus_a_as,
            'bonus_a_at' => $bonus_a_at,
            'bonus_a_au' => $bonus_a_au,
            'bonus_a_av' => $bonus_a_av,
        ]);
    }

    public function downloadTemplate()
    {
        return Excel::download(new TemplateExportBonusA, 'plantilla_bonus_a.xlsx');
    }
}
