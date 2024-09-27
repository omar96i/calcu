<?php

namespace App\Imports;

use App\Models\ActuarialGroup;
use App\Models\Study;
use Maatwebsite\Excel\Concerns\ToModel;

class StudyImport implements ToModel
{

    public $date;
    public $report_type;

    public function __construct($date, $report_type)
    {
        $this->date = $date;
        $this->report_type = $report_type;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $date1 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]);
        $newDate1 = $date1->format('Y-m-d');
        $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[9]);
        $newDate2 = $date2->format('Y-m-d');
        $date3 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[12]);
        $newDate3 = $date3->format('Y-m-d');
        $group = ActuarialGroup::where('name', $row[2])->get()->first();
        return new Study([
            'user_id' => auth()->user()->id,
            'actuarial_group_id' => ($group)? $group->id : 1,
            'cc' => $row[0],
            'name' => $row[1],
            'sex' => $row[3],
            'pension_class' => $row[4],
            'pension_situation' => $row[5],
            'civil_status' => $row[6],
            'birth_date' => $newDate1,
            'causative_state' => $row[8],
            'date_of_birth_spouse' => $newDate2,
            'spouse_gender' => $row[10],
            'spouse_gender' => $row[11],
            'company_entry_date' => $newDate3,
            'company_withdrawal_date' => $row[13],
            'base_income_contribution' => $row[14],
            'allowance_value' => $row[15],
            'additional_allowance_value' => $row[16],
            'health_contribution' => $row[17],
            'extralegal_premium_amount' => $row[18],
            'number_months_year' => $row[19],
            'counter_rpm' => $row[20],
            'months_to_quote' => $row[21],
            'funeral_aid' => $row[22],
            'additional_weeks' => $row[23],
            'allowance_iss' => $row[24],
            'allowance_14' => $row[25],
            'school_help' => $row[26],
            'year' => $this->date,
            'report_type' => $this->report_type
        ]);
    }
}
