<?php

namespace App\Imports;

use App\Models\BonusB;
use Maatwebsite\Excel\Concerns\ToModel;

class BonusBImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[6]);
        $newDate = $date->format('Y-m-d');
        $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[8]);
        $newDate2 = $date2->format('Y-m-d');
        $date3 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[9]);
        $newDate3 = $date3->format('Y-m-d');
        return new BonusB([
            'entity' => $row[1],
            'id_type' => $row[2],
            'id_number' => $row[3],
            'gender' => $row[4],
            'full_name' => $row[5],
            'birthdate' => $newDate,
            'base_salary' => $row[7],
            'entry_date' => $newDate2,
            'out_date' => $newDate3,
            'days_leaves' => $row[10],
            'interims' => $row[11],
        ]);
    }
}