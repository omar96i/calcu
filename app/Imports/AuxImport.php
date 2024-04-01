<?php

namespace App\Imports;

use App\Models\CompanyStudyAux;
use Maatwebsite\Excel\Concerns\ToModel;

class AuxImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CompanyStudyAux([
            'col1' => $row[0],
            'col2' => $row[1],
            'col3' => $row[2],
            'col4' => $row[3],
            'col5' => $row[4],
            'col6' => $row[5],
            'col7' => $row[6],
            'col8' => $row[7],
            'col9' => $row[8],
            'col10' => $row[9],
            'col11' => $row[10],
            'col12' => $row[11],
            'col13' => $row[12],
            'col14' => $row[13],
            'col15' => $row[14],
            'col16' => $row[15],
            'col17' => $row[16],
            'col18' => $row[17],
            'col19' => $row[18],
            'col20' => $row[19],
            'col21' => $row[20],
            'col22' => $row[21],
            'col23' => $row[22],
            'col24' => $row[23],
            'col25' => $row[24],
            'col26' => $row[25],
            'col27' => $row[26],
            'col28' => $row[27],
            'col29' => $row[28],
            'col30' => $row[29],
            'col31' => $row[30],
            'col32' => $row[31],
            'col33' => $row[32],
            'col34' => $row[33],
            'col35' => $row[34],
            'col36' => $row[35],
            'col37' => $row[36],
            'col38' => $row[37],
            'col39' => $row[38],
            'col40' => $row[39],
            'col41' => $row[40],
            'col42' => $row[41],
            'col43' => $row[42],
            'col44' => $row[43],
            'col45' => $row[44],
            'col46' => $row[45],
            'col47' => $row[46],
            'col48' => $row[47],
            'col49' => $row[48],
            'col50' => $row[49],
            'col51' => $row[50],
            'col52' => $row[51],
            'col53' => $row[52],
            'col54' => $row[53],
            'col55' => $row[54],
            'col56' => $row[55],
            'col57' => $row[56],
            'col58' => $row[57],
            'col59' => $row[58],
            'col60' => $row[59],
            'col61' => $row[60],
            'col62' => $row[61],
            'col63' => $row[62],
            'col64' => $row[63],
            'col65' => $row[64],
            'col66' => $row[65],
            'col67' => $row[66],
            'col68' => $row[67],
            'col69' => $row[68],
            'col70' => $row[69],
            'col71' => $row[70],
            'col72' => $row[71],
            'col73' => $row[72],
            'col74' => $row[73],
            'col75' => $row[74],
        ]);
    }
}
