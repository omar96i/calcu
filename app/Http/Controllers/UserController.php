<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Layoff;
use App\Models\CompanyStudyAux;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
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
        $company = CompanyStudyAux::sum('col75');
        $usercontroller = User::where('id', $user->id)->get();
        $pdf = Pdf::loadview('pdf.example', ['usercontroller' =>$usercontroller,'total'=>$total,'company'=>$company,'sumaPorUserId'=>$sumaPorUserId,'conteoTotal'=>$conteoTotal,'sumTotal'=>$sumTotal]);
        return $pdf->download();
    }

    public function PdfController2(User $user){
        $usercontroller = User::where('id', $user->id)->get();
        $pdf = Pdf::loadview('pdf.example_int', ['usercontroller' =>$usercontroller]);
        return $pdf->download();
    }

   


    
}
