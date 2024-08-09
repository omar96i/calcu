<?php

namespace App\Imports;

use App\Models\Tasa_vida_hv_mi;
use Maatwebsite\Excel\Concerns\ToModel;

class Tasa_vida_hi_mi_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tasa_vida_hv_mi([
            'tasa_vida_hi_mi_a'=> $row[0],
            'tasa_vida_hi_mi_b'=> $row[1],
            'tasa_vida_hi_mi_c'=> $row[2],
        ]);
    }
}
