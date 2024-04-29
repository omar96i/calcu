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

        $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]);
        $newDate = $date->format('Y-m-d');
        $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]);
        $newDate2 = $date2->format('Y-m-d');
        $date3 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[8]);
        $newDate3 = $date3->format('Y-m-d');
        return new BonusB([
            'entity' => $row[0],
            'id_type' => $row[1],
            'id_number' => $row[2],
            'gender' => $row[3],
            'full_name' => $row[4],
            'birthdate' => $newDate,
            'base_salary' => $row[6],
            'entry_date' => $newDate2,
            'out_date' => $newDate3,
            'days_leaves' => $row[9],
            'interims' => $row[10],
        ]);
    }
}
