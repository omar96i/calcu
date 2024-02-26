<?php

namespace App\Imports;

use App\Models\TableValues;
use Maatwebsite\Excel\Concerns\ToModel;

class TableValueImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TableValues([
            'table_id' => 4,
            'x' => $row[0],
            'lx' => $row[1],
        ]);
    }
}
