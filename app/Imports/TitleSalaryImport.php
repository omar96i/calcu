<?php

namespace App\Imports;

use App\Models\TitleSalary;
use Maatwebsite\Excel\Concerns\ToModel;

class TitleSalaryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TitleSalary([
            'year' => $row[0],
            'amount' => $row[1],
            'increment' => $row[2],
            'ipc' => $row[3],
            'accummulated' => $row[4],
            'dtfp' => $row[5],
            'accumulated_2' => $row[6],
        ]);
    }
}
