<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ActuarialGroup;
use App\Models\Layoff;
use App\Models\GeneralData;
use App\Models\Study;
use App\Models\FiveYearCalculation;
use App\Models\CompanyStudyAux;
use App\Models\TitleCalculation;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Nacional
    public function PdfController(User $user){
        $userIdsRepetidos = CompanyStudyAux::select('col3')
        ->groupBy('col3')
        ->having(DB::raw('COUNT(col3)'), '>', 1)
        
        ->pluck('col3');
    
    // Sumar los valores de 'amount' para esos user_ids
    $sumaPorUserId = CompanyStudyAux::whereIn('col3', $userIdsRepetidos)

        ->select('col3', 
        DB::raw('SUM(col75) as total_amount'),
        DB::raw('COUNT(*) as total_count')
        )
        ->groupBy('col3')
        ->get();

        // Inicializar la variable para el conteo total
            $conteoTotal = 0;
            $sumTotal=0;
            // Acumular el total_count
            foreach ($sumaPorUserId as $dato) {
                $conteoTotal += $dato->total_count;
                $sumTotal += $dato->total_amount;
            }

        
        $total = Layoff::sum('advance');
        $total_FiveYear = FiveYearCalculation::sum('basic_salary');
        $total_FiveYear = TitleCalculation::sum('basic_salary');
        
        $company = CompanyStudyAux::sum('col75');
        $usercontroller = User::where('id', $user->id)->get();
        $pdf = Pdf::loadview('pdf.example', ['usercontroller' =>$usercontroller,'total'=>$total,'company'=>$company,'sumaPorUserId'=>$sumaPorUserId,'conteoTotal'=>$conteoTotal,'sumTotal'=>$sumTotal,'total_FiveYear'=>$total_FiveYear]);
        return $pdf->download();
    }
    //Internacional
    public function PdfController2(User $user){
        // Obtener los actuarial_group_id que se repiten
        $userIdsRepetidos = Study::select('actuarial_group_id')
            ->where('year', 2023) // Filtrar por el año 2023
            ->groupBy('actuarial_group_id')
            ->having(DB::raw('COUNT(actuarial_group_id)'), '>', 1)
            ->pluck('actuarial_group_id');
        
        // Sumar los valores de 'amount' para esos actuarial_group_id
        $sumaPorUserId = Study::whereIn('actuarial_group_id', $userIdsRepetidos)
            ->where('year', 2023) // Filtrar por el año 2023
            ->select(
                'actuarial_group_id', 
                DB::raw('SUM(studies_by) as total_amount'),
                DB::raw('SUM(studies_bv) as total_amount_bv'),
                DB::raw('SUM(studies_bw) as total_amount_bw'),
                DB::raw('SUM(studies_bx) as total_amount_bx'),
                DB::raw('SUM(studies_baz) as total_amount_baz'),
                DB::raw('SUM(studies_cg) as total_amount_cg'),
                DB::raw('COUNT(*) as total_count')
            )
            ->groupBy('actuarial_group_id')
            ->get();
    
        // Inicializar las variables para los totales
        $conteoTotal = 0;
        $sumTotal = 0;
        $sumTotal_bv = 0;
        $sumTotal_bw = 0;
        $sumTotal_bx = 0;
        $sumTotal_baz = 0;
        $sumTotal_cg = 0;
    
        // Acumular el total_count y las sumas
        foreach ($sumaPorUserId as $dato) {
            $conteoTotal += $dato->total_count;
            $sumTotal += $dato->total_amount;
            $sumTotal_bv += $dato->total_amount_bv;
            $sumTotal_bw += $dato->total_amount_bw;
            $sumTotal_bx += $dato->total_amount_bx;
            $sumTotal_baz += $dato->total_amount_baz;
            $sumTotal_cg += $dato->total_amount_cg;
        }

        // Obtener la suma de studies_bx, studies_bw y studies_bv pero del año 2022
        $sumTotal_bx_2022 = Study::where('year', 2022)->sum('studies_bx');
        $sumTotal_bw_2022 = Study::where('year', 2022)->sum('studies_bw');
        $sumTotal_bv_2022 = Study::where('year', 2022)->sum('studies_bv');

        // Calcular la suma total de esos campos del año 2022
        $sumTotal_2022 = $sumTotal_bx_2022 + $sumTotal_bw_2022 + $sumTotal_bv_2022;

        
    
        // Obtener otros totales filtrados por el año 2023
        $total = Layoff::sum('advance');
        $company = Study::where('year', 2023)->sum('studies_by');
        $company_bv = Study::where('year', 2023)->sum('studies_bv');
        $company_bw = Study::where('year', 2023)->sum('studies_bw');
        $company_bx = Study::where('year', 2023)->sum('studies_bx');
        $company_baz = Study::where('year', 2023)->sum('studies_baz');
        $company_cg = Study::where('year', 2023)->sum('studies_cg');

        // Calcular la suma total de esos campos del año 2023
      
        $sumTotal_2023 =  ($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)+$sumTotal_baz;
    
        // Obtener información del usuario
        $usercontroller = User::where('id', $user->id)->get();
        
        // Redondear resultados
        $total = round($total);
        $company = round($company);
        $sumTotal = round($sumTotal);
        $sumTotal_bv = round($sumTotal_bv);
        $sumTotal_bw = round($sumTotal_bw);
        $sumTotal_bx = round($sumTotal_bx);
        $sumTotal_baz = round($sumTotal_baz);
        $sumTotal_cg = round($sumTotal_cg);
        $company_bv = round($company_bv);
        $sumTotal_2022 = round($sumTotal_2022); // Sumar total de 2022
        $sumTotal_2023 = $sumTotal_2023; // Sumar total de 2023

        

        // Calcular A31 (j - 0.01) y A32 (valor de j)
        $A32 = 11.06;
        $A31 = $A32 - 1;
        
        //$A33 = 11.06;
        $A34 = $A32 + 1;
        

        // Sumar el valor total de 2023
        $sumTotal_2023 = // (Aquí va el cálculo de $sumTotal_2023)

        // Aplicar la fórmula
        $duration1 = ($sumTotal_2023 / $A31) * $A32;
        $duration2 = (17233669351 / 12.06) * 11.06;
       // $duration2 = 15805201781;

        $duration = (($duration1-$duration2)/(2*$sumTotal_2023*0.01));

        

        // Generar el PDF
        $pdf = Pdf::loadview('pdf.example_int', [
            'usercontroller' => $usercontroller,
            'total' => $total,
            'company' => $company,
            'sumaPorUserId' => $sumaPorUserId,
            'conteoTotal' => $conteoTotal,
            'sumTotal' => $sumTotal,
            'sumTotal_bv' => $sumTotal_bv,
            'sumTotal_bw' => $sumTotal_bw,
            'sumTotal_bx' => $sumTotal_bx,
            'sumTotal_baz' => $sumTotal_baz,
            'sumTotal_cg' => $sumTotal_cg,
            'company_bv' => $company_bv,
            'sumTotal_2022' => $sumTotal_2022, // Incluir el total de 2022
            'sumTotal_2023' => $sumTotal_2023, // Incluir el total de 2022
            'duration' => $duration,
            'duration1'=>$duration1,
            'duration2' => $duration2,
            'A34' => $A34,
            'A32' => $A32
        ]);


    
        return $pdf->download();
    }
    

   


    
}
