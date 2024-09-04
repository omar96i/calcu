<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ActuarialGroup;
use App\Models\Layoff;
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
        $userIdsRepetidos = Study::select('actuarial_group_id')
        ->groupBy('actuarial_group_id')
        ->having(DB::raw('COUNT(actuarial_group_id)'), '>', 1)
        
        ->pluck('actuarial_group_id');
    
    // Sumar los valores de 'amount' para esos user_ids
    $sumaPorUserId = Study::whereIn('actuarial_group_id', $userIdsRepetidos)

        ->select('actuarial_group_id', 
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

        // Inicializar la variable para el conteo total
            $conteoTotal = 0;
            $sumTotal=0;
            $sumTotal_bv=0;
            $sumTotal_bw=0;
            $sumTotal_bx=0;
            $sumTotal_baz=0;
            $sumTotal_cg=0;
            // Acumular el total_count
            foreach ($sumaPorUserId as $dato) {
                $conteoTotal += $dato->total_count;
                $sumTotal += $dato->total_amount;
                $sumTotal_bv += $dato->total_amount_bv;
                $sumTotal_bw += $dato->total_amount_bw;
                $sumTotal_bx += $dato->total_amount_bx;
                $sumTotal_baz += $dato->total_amount_baz;
                $sumTotal_cg += $dato->total_amount_cg;
            }

        $total = Layoff::sum('advance');
        $company = Study::sum('studies_by');
        $company_bv = Study::sum('studies_bv');
        $company_bw = Study::sum('studies_bw');
        $company_bx = Study::sum('studies_bx');
        $company_baz = Study::sum('studies_baz');
        $company_cg = Study::sum('studies_cg');

        



        $usercontroller = User::where('id', $user->id)->get();
            
        $total = round($total);
        $company = round($company);
        $sumaPorUserId = ($sumaPorUserId);
        $conteoTotal = ($conteoTotal);
        $sumTotal = round($sumTotal);
        $sumTotal_bv = round($sumTotal_bv);
        $sumTotal_bw = round($sumTotal_bw);
        $sumTotal_bx = round($sumTotal_bx);
        $sumTotal_baz = round($sumTotal_baz);
        $sumTotal_cg = round($sumTotal_cg);
        $company_bv = round($sumTotal);

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
            'company_bv' => $company_bv
        ]);

        $dato = ActuarialGroup::with('actuarialGroup')->find($dato->id);

        

        // $pdf = Pdf::loadview('pdf.example_int', ['usercontroller' =>$usercontroller,'total'=>$total,'company'=>$company,'sumaPorUserId'=>$sumaPorUserId,'conteoTotal'=>$conteoTotal,'sumTotal'=>$sumTotal]);
        return $pdf->download();
    }

   


    
}
