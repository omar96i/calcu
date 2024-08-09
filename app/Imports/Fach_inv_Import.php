<?php

namespace App\Imports;

use App\Models\Fach_inv;
use Maatwebsite\Excel\Concerns\ToModel;

class Fach_inv_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Fach_inv([
            'Fach_inv_a'=> $row[0],
            'Fach_inv_b'=> $row[1],
            'Fach_inv_c'=> $row[2],
            'Fach_inv_d'=> $row[3],
            'Fach_inv_e'=> $row[4],
            'Fach_inv_f'=> $row[5],
            'Fach_inv_g'=> $row[6],
            'Fach_inv_h'=> $row[7],
            'Fach_inv_i'=> $row[8],
            'Fach_inv_j'=> $row[9],
            'Fach_inv_k'=> $row[10],
            'Fach_inv_l'=> $row[11],
            'Fach_inv_m'=> $row[12],
            'Fach_inv_n'=> $row[13],
            'Fach_inv_o'=> $row[14],
        ]);
    }
}
