<?php

namespace App\Imports;

use App\Models\Layoff;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class LayoffImport implements ToModel
{
    /**
    * @return int
    */
    public function startRow(): int
    {
        return 2;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        $date1 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[3]);
        $newDate1 = $date1->format('Y-m-d');
    
        
        $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]);
        $newDate2 = $date2->format('Y-m-d');
    
        return new Layoff([
            'cc' => $row[0],
            'full_name' => $row[1],
            'sex' => $row[2],
            'date_birth' => $newDate1,
            'date_entry' => $newDate2,
            'suspension' => $row[5],
            'import_salary' => $row[6],
            'advance' => $row[7],
        ]);
    }
}
