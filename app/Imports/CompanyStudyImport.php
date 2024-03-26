<?php

namespace App\Imports;

use App\Models\ActuarialGroup;
use App\Models\CompanyStudy;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CompanyStudyImport implements ToModel, WithStartRow
{
    private $company_id;

    public function __construct(int $company_id)
    {
        $this->company_id = $company_id;
    }

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
        $newDate1 = null;
        if (!empty($row[5])) {
            $date1 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]);
            $newDate1 = $date1->format('Y-m-d');
        }
        $newDate2 = null;
        if (!empty($row[7])) {
            $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]);
            $newDate2 = $date2->format('Y-m-d');
        }
        $newDate3 = null;
        if (!empty($row[10])) {
            $date3 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[10]);
            $newDate3 = $date3->format('Y-m-d');
        }
        $newDate4 = null;
        if (!empty($row[11])) {
            $date4 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[11]);
            $newDate4 = $date4->format('Y-m-d');
        }
        if(isset($row[2])){
            $group = ActuarialGroup::where('name', $row[2])->get()->first();
        }else{
            $group = null;
        }

        return new CompanyStudy([
            'company_id' => $this->company_id,
            'actuarial_group_id' => ($group)? $group->id : 1,
            'cc' => ($row[0]) ? $row[0] : 1,
            'full_name' => ($row[1]) ? $row[1] : 1,
            'sex' => ($row[3]) ? $row[3] : 1,
            'civil_status' => ($row[4]) ? $row[4] : 1,
            'birth_date' => $newDate1,
            'causing_state' => ($row[6]) ? $row[6] : 1,
            'date_of_birth_spouse' => $newDate2,
            'spouse_gender' => ($row[8]) ? $row[8] : 1,
            'spouse_status' => ($row[9]) ? $row[9] : 1,
            'company_entry_date' => $newDate3,
            'company_withdrawal_date' => $newDate4,
            'income_base_quotation' => ($row[12]) ? $row[12] : 1,
            'allowance_value' => ($row[13]) ? $row[13] : 1,
            'allowance_14' => ($row[14]) ? $row[14] : 1,
        ]);


    }
}
