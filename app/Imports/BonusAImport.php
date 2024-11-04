<?php

namespace App\Imports;

use App\Models\BonusA;
use Maatwebsite\Excel\Concerns\ToModel;

class BonusAImport implements ToModel
{
    public $date;
    public $user_id;

    public function __construct($date, $user_id)
    {
        $this->date = $date;
        $this->user_id = $user_id;
    }
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

        $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]);
        $newDate = $date->format('Y-m-d');
        $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]);
        $newDate2 = $date2->format('Y-m-d');
        $date3 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[8]);
        $newDate3 = $date3->format('Y-m-d');
        return new BonusA([
            'entity' => $row[0],
            'id_type' => $row[1],
            'id_number' => $row[2],
            'gender' => $row[3],
            'full_name' => $row[4],
            'birthdate' => $newDate,
            'base_salary' => $row[6],
            'entry_date' => $newDate2,
            'departure_date' =>  $newDate3,
            'liquidated_days' => $row[9],
            'user_id' => $this->user_id,
            'year' => $this->date
        ]);
    }
}
