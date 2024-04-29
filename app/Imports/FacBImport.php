<?php

namespace App\Imports;

use App\Models\FacB;
use Maatwebsite\Excel\Concerns\ToModel;

class FacBImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new FacB([
            'age' => $row[0],
            'm_fac_1' => $row[1],
            'm2_fac_1' => $row[2],
            'f_fac_1' => $row[3],
            'f2_fac_1' => $row[4],
            'm_fac_2' => $row[5],
            'm2_fac_2' => $row[6],
            'f_fac_2' => $row[7],
            'f2_fac_2' => $row[8],
        ]);
    }
}
