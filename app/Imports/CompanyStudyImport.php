<?php

namespace App\Imports;

use App\Models\ActuarialGroup;
use App\Models\CompanyStudy;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CompanyStudyImport implements ToModel, WithStartRow
{
    private $company_id;
    private $user_id;

    public function __construct(int $company_id)
    {
        $this->user_id = $company_id;
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
        if (!empty($row[6])) {
            $date1 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[6]);
            $newDate1 = $date1->format('Y-m-d');
        }
        $newDate2 = null;
        if (!empty($row[8])) {
            $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[8]);
            $newDate2 = $date2->format('Y-m-d');
        }
        $newDate3 = null;
        if (!empty($row[11])) {
            $date3 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[11]);
            $newDate3 = $date3->format('Y-m-d');
        }
        $newDate4 = null;
        if (!empty($row[12])) {
            $date4 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[12]);
            $newDate4 = $date4->format('Y-m-d');
        }
        if(isset($row[1])){
            $group = ActuarialGroup::where('name', $row[1])->get()->first();
        }else{
            $group = null;
        }

        return new CompanyStudy([
            'company_id' => $this->user_id,
            'actuarial_group_id' => ($group)? $group->id : 1,
            'cc' => ($row[0]) ? $row[0] : 1,
            'full_name' => ($row[1]) ? $row[1] : 1,
            'sex' => ($row[2]) ? $row[2] : 1,
            'civil_status' => ($row[3]) ? $row[3] : 1,
            'birth_date' => $newDate1,
            'causing_state' => ($row[5]) ? $row[5] : 1,
            'date_of_birth_spouse' => $newDate2,
            'spouse_gender' => ($row[7]) ? $row[7] : 1,
            'spouse_status' => ($row[8]) ? $row[8] : 1,
            'company_entry_date' => $newDate3,
            'company_withdrawal_date' => $newDate4,
            'income_base_quotation' => ($row[11]) ? $row[11] : 1,
            'allowance_value' => ($row[12]) ? $row[12] : 1,
            'allowance_14' => ($row[13]) ? $row[13] : 1,
        ]);


    }
}
