<?php

namespace App\Imports;

use App\Models\FiveYearCalculation;
use Maatwebsite\Excel\Concerns\ToModel;

class FiveYearCalculationImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {


        $date1 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]);
        $newDate1 = $date1->format('Y-m-d');
        // $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]);
        // $newDate2 = $date2->format('Y-m-d');
        // $date3 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]);
        // $newDate3 = $date3->format('Y-m-d');
        // $date4 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[8]);
        // $newDate4 = $date4->format('Y-m-d');
        // $date5 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[9]);
        // $newDate5 = $date5->format('Y-m-d');
        return new FiveYearCalculation([
            'cc' => $row[0],
            'full_name' => $row[1],
            'birth_date' => ($newDate1 != '1970-01-01') ? $newDate1 : null,
            'sec' => $row[3],
            'basic_salary' => $row[4],
            // 'named_date' => ($newDate2 != '1970-01-01') ? $newDate2 : null,
            'licence' => $row[6],
            // '5_year' => ($newDate3 != '1970-01-01') ? $newDate3 : null,
            // '10_year' => ($newDate4 != '1970-01-01') ? $newDate4 : null,
            // '15_year' => ($newDate5 != '1970-01-01') ? $newDate5 : null,
            'coment' => $row[10],
        ]);
    }
}
