<?php

namespace App\Imports;

use App\Models\AuxTable;
use Maatwebsite\Excel\Concerns\ToModel;

class AuxTableImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AuxTable([
            'a' => $row[0],
            'b' => $row[1],
            'c' => $row[2],
            'd' => $row[3],
            'f' => $row[4],
            'g' => $row[5],
            'h' => $row[6],
            'i' => $row[7],
            'j' => $row[8],
            'k' => $row[9],
            'l' => $row[10],
        ]);
    }
}
