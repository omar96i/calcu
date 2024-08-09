<?php

namespace App\Imports;

use App\Models\Fac_hom;
use Maatwebsite\Excel\Concerns\ToModel;

class Fac_hom_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Fac_hom([
            'Fac_hom_a'=> $row[0],
            'Fac_hom_b'=> $row[1],
            'Fac_hom_c'=> $row[2],
            'Fac_hom_d'=> $row[3],
            'Fac_hom_e'=> $row[4],
            'Fac_hom_f'=> $row[5],
            'Fac_hom_g'=> $row[6],
            'Fac_hom_h'=> $row[7],
            'Fac_hom_i'=> $row[8],
            'Fac_hom_j'=> $row[9],
            'Fac_hom_k'=> $row[10],
            'Fac_hom_l'=> $row[11],
            'Fac_hom_m'=> $row[12],
            'Fac_hom_n'=> $row[13],
            'Fac_hom_o'=> $row[14],
        ]);
    }
}
