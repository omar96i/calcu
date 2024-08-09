<?php

namespace App\Imports;

use App\Models\Facm_inv;
use Maatwebsite\Excel\Concerns\ToModel;

class Facm_inv_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Facm_inv([
            'Facm_inv_a'=> $row[0],
            'Facm_inv_b'=> $row[1],
            'Facm_inv_c'=> $row[2],
            'Facm_inv_d'=> $row[3],
            'Facm_inv_e'=> $row[4],
            'Facm_inv_f'=> $row[5],
            'Facm_inv_g'=> $row[6],
            'Facm_inv_h'=> $row[7],
            'Facm_inv_i'=> $row[8],
            'Facm_inv_j'=> $row[9],
            'Facm_inv_k'=> $row[10],
            'Facm_inv_l'=> $row[11],
            'Facm_inv_m'=> $row[12],
            'Facm_inv_n'=> $row[13],
            'Facm_inv_o'=> $row[14],
        ]);
    }
}
