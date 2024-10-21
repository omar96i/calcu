<?php

namespace App\Imports;

use App\Models\TitleCalculation;
use Maatwebsite\Excel\Concerns\ToModel;

class TitleCalculationImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    private $rowNumber = 0; // Contador de filas
    public function model(array $row)
    {
        $this->rowNumber++; // Incrementa el número de fila

        // Omitir la primera fila (el encabezado)
        if ($this->rowNumber === 1) {
            return null;
        }

        $date1 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]);
        $newDate1 = $date1->format('Y-m-d');
        $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]);
        $newDate2 = $date2->format('Y-m-d');
        $date3 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[8]);
        $newDate3 = $date3->format('Y-m-d');
        $date4 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[10]);
        $newDate4 = $date4->format('Y-m-d');
        $date5 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[11]);
        $newDate5 = $date5->format('Y-m-d');
        return new TitleCalculation([
            'status' => $row[0],
            'type_cc' => $row[1],
            'cc' => $row[2],
            'full_name' => $row[3],
            'date_birth' => $newDate1,
            'sex' => $row[5],
            'salary' => $row[6],
            'date_court' => $newDate2,
            'date_link' => $newDate3,
            'quoted_time' => $row[9],
            'at' => $newDate4,
            'to' => $newDate5,
            'dnr' => $row[12],
        ]);
    }
}
