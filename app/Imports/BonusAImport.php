<?php

namespace App\Imports;

use App\Models\BonusA;
use Maatwebsite\Excel\Concerns\ToModel;

class BonusAImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BonusA([
            'entity' => $row[1],
            'id_type' => $row[2],
            'id_number' => $row[3],
            'gender' => $row[4],
            'full_name' => $row[5],
            'birthdate' => $row[6],
            'base_salary' => $row[7],
            'entry_date' => $row[8],
            'departure_date' => $row[9],
            'liquidated_days' => $row[10],
        ]);
    }
}
