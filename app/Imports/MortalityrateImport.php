<?php

namespace App\Imports;

use App\Models\Mortalityrate;
use Maatwebsite\Excel\Concerns\ToModel;

class MortalityrateImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mortalityrate([
            'mortalityrate_a'=> $row[0],
            'mortalityrate_b'=> $row[1],
            'mortalityrate_c'=> $row[2],
        ]);
    }
}
