<?php

namespace App\Filament\Pages;

use App\Models\Company;
use App\Models\CompanyStudyAux;
use App\Models\Table;
use App\Models\TableValues;
use Filament\Pages\Page;

class TablesStudyPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.tables-study-page';

    public $company;

    public $tableHombre;

    public $tableMujer;

    public $i = 0.0679;

    public function mount(){
        $this->company = CompanyStudyAux::get();
        $this->tableHombre = Table::with('table_values')->where('name', 'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Masculino')->get()->first();
        $this->tableMujer = Table::with('table_values')->where('name', 'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Femenino')->get()->first();
    }

    public function calculateValueColumnAI($sex, $age, $age2){
        if($age > $age2){
            if($sex == 1){
                $value = TableValues::whereHas('table', function($query){
                    $query->where('name', 'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Masculino');
                })->where('x', $age)->get()->first();

                $d5_plus_1 = 1 + $this->i;

                // Calcular el resultado de ($D$5 + 1) ^ C19
                $resultado_potencia = pow($d5_plus_1, $value->x);

                // Calcular el inverso de ($D$5 + 1) ^ C19
                $inverso = 1 / $resultado_potencia;

                // Calcular el resultado final de la fórmula
                $final_resultado1 = $inverso * $value->lx;

                return $final_resultado1/$final_resultado1;
            }else{
                $value = TableValues::whereHas('table', function($query){
                    $query->where('name', 'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Femenino');
                })->where('x', $age)->get()->first();

                $d5_plus_1 = 1 + $this->i;

                // Calcular el resultado de ($D$5 + 1) ^ C19
                $resultado_potencia = pow($d5_plus_1, $value->x);

                // Calcular el inverso de ($D$5 + 1) ^ C19
                $inverso = 1 / $resultado_potencia;

                // Calcular el resultado final de la fórmula
                $final_resultado1 = $inverso * $value->lx;

                return $final_resultado1/$final_resultado1;
            }
        }else if($age2 > $age){
            if($sex == 1){
                $value = TableValues::whereHas('table', function($query){
                    $query->where('name', 'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Masculino');
                })->where('x', $age2)->get()->first();
                $value2 = TableValues::whereHas('table', function($query){
                    $query->where('name', 'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Masculino');
                })->where('x', $age)->get()->first();

                $d5_plus_1 = 1 + $this->i;

                // Calcular el resultado de ($D$5 + 1) ^ C19
                $resultado_potencia = pow($d5_plus_1, $value->x);

                // Calcular el inverso de ($D$5 + 1) ^ C19
                $inverso = 1 / $resultado_potencia;

                // Calcular el resultado final de la fórmula
                $final_resultado1 = $inverso * $value->lx;

                $d5_plus_2 = 1 + $this->i;

                // Calcular el resultado de ($D$5 + 1) ^ C19
                $resultado_potencia2 = pow($d5_plus_2, $value2->x);

                // Calcular el inverso de ($D$5 + 1) ^ C19
                $inverso2 = 1 / $resultado_potencia2;

                // Calcular el resultado final de la fórmula
                $final_resultado2 = $inverso2 * $value2->lx;

                return $final_resultado1/$final_resultado2;
            }else{
                $value = TableValues::whereHas('table', function($query){
                    $query->where('name', 'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Femenino');
                })->where('x', $age2)->get()->first();
                $value2 = TableValues::whereHas('table', function($query){
                    $query->where('name', 'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Femenino');
                })->where('x', $age)->get()->first();

                $d5_plus_1 = 1 + $this->i;

                // Calcular el resultado de ($D$5 + 1) ^ C19
                $resultado_potencia = pow($d5_plus_1, $value->x);

                // Calcular el inverso de ($D$5 + 1) ^ C19
                $inverso = 1 / $resultado_potencia;

                // Calcular el resultado final de la fórmula
                $final_resultado1 = $inverso * $value->lx;

                $d5_plus_2 = 1 + $this->i;

                // Calcular el resultado de ($D$5 + 1) ^ C19
                $resultado_potencia2 = pow($d5_plus_2, $value2->x);

                // Calcular el inverso de ($D$5 + 1) ^ C19
                $inverso2 = 1 / $resultado_potencia2;

                // Calcular el resultado final de la fórmula
                $final_resultado2 = $inverso2 * $value2->lx;

                return $final_resultado1/$final_resultado2;
            }
        }
    }

    public function calculateValueColumnAJ(){

    }
}
