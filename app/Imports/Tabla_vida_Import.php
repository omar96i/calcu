<?php

namespace App\Imports;

use App\Models\Tabla_vida_invalidos;
use Maatwebsite\Excel\Concerns\ToModel;

class Tabla_vida_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tabla_vida_invalidos([
            'tabla_vida_a'=> $row[0],
            'tabla_vida_b'=> $row[1],
            'tabla_vida_c'=> $row[2],
        ]);
    }
}
