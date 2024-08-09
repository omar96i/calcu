<?php

namespace App\Imports;

use App\Models\Fac_muj;
use Maatwebsite\Excel\Concerns\ToModel;

class Fac_muj_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Fac_muj([
            'Fac_muj_a'=> $row[0],
            'Fac_muj_b'=> $row[1],
            'Fac_muj_c'=> $row[2],
            'Fac_muj_d'=> $row[3],
            'Fac_muj_e'=> $row[4],
            'Fac_muj_f'=> $row[5],
            'Fac_muj_g'=> $row[6],
            'Fac_muj_h'=> $row[7],
            'Fac_muj_i'=> $row[8],
            'Fac_muj_j'=> $row[9],
            'Fac_muj_k'=> $row[10],
            'Fac_muj_l'=> $row[11],
            'Fac_muj_m'=> $row[12],
            'Fac_muj_n'=> $row[13],
            'Fac_muj_o'=> $row[14],
        ]);
    }
}
