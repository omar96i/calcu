<?php

namespace App\Imports;

use App\Models\GeneralData;
use Maatwebsite\Excel\Concerns\ToModel;

class GeneralDataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1]);
        $newDate = $date->format('Y-m-d');
        return new GeneralData([
            'calculation_year' => $row[0],
            'calculation_date' => $newDate, // Convertir al formato deseado
            'minimum_salary' => $row[2],
            'administration_expenses' => $row[3],
            'k_growth' => $row[4],
            'technical_rate' => $row[5],
            'expected_inflation_rate' => $row[6],
            'estimated_rate' => $row[7],
            'age_difference' => $row[8],
            'safety_factor' => $row[9],
            'annual_cpi' => $row[10],
        ]);
    }
}
