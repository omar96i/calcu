<?php

namespace App\Imports;

use App\Models\Axy;
use Maatwebsite\Excel\Concerns\ToModel;

class AxyImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Axy([
            'axy_a'=> $row[0],
            'axy_b'=> $row[1],
            'axy_c'=> $row[2],
            'axy_d'=> $row[3],
            'axy_e'=> $row[4],
            'axy_f'=> $row[5],
            'axy_g'=> $row[6],
            'axy_h'=> $row[7],
            'axy_i'=> $row[8],
            'axy_j'=> $row[9],
            'axy_k'=> $row[10],
            'axy_l'=> $row[11],
            'axy_m'=> $row[12],
            'axy_n'=> $row[13],
            'axy_o'=> $row[14],
            'axy_p'=> $row[15],
            'axy_q'=> $row[16],
            'axy_r'=> $row[17],
            'axy_s'=> $row[18],
            'axy_t'=> $row[19],
            'axy_u'=> $row[20],
            'axy_v'=> $row[21],
            'axy_w'=> $row[22],
            'axy_x'=> $row[23],
            'axy_y'=> $row[24],
            'axy_z'=> $row[25],
            'axy_aa'=> $row[26],
            'axy_ab'=> $row[27],
            'axy_ac'=> $row[28],
            'axy_ad'=> $row[29],
            'axy_ae'=> $row[30],
            'axy_af'=> $row[31],
            'axy_ag'=> $row[32],
            'axy_ah'=> $row[33],
            'axy_ai'=> $row[34],
            'axy_aj'=> $row[35],
            'axy_ak'=> $row[36],
            'axy_al'=> $row[37],
            'axy_am'=> $row[38],
            'axy_an'=> $row[39],
            'axy_ao'=> $row[40],
            'axy_ap'=> $row[41],
            'axy_aq'=> $row[42],
            'axy_ar'=> $row[43],
            'axy_as'=> $row[44],
            'axy_at'=> $row[45],
            'axy_au'=> $row[46],
            'axy_av'=> $row[47],
            'axy_aw'=> $row[48],
            'axy_ax'=> $row[49],
            'axy_ay'=> $row[50],
            'axy_az'=> $row[51],
            'axy_ba'=> $row[52],
            'axy_bb'=> $row[53],
            'axy_bc'=> $row[54],
            'axy_bd'=> $row[55],
            'axy_be'=> $row[56],
            'axy_bf'=> $row[57],
            'axy_bg'=> $row[58],
            'axy_bh'=> $row[59],
            'axy_bi'=> $row[60],
            'axy_bj'=> $row[61],
            'axy_bk'=> $row[62],
            'axy_bl'=> $row[63],
            'axy_bm'=> $row[64],
            'axy_bn'=> $row[65],
            'axy_bo'=> $row[66],
            'axy_bp'=> $row[67],
            'axy_bq'=> $row[68],
            'axy_br'=> $row[69],
            'axy_bs'=> $row[70],
            'axy_bt'=> $row[71],
            'axy_bu'=> $row[72],
            'axy_bv'=> $row[73],
            'axy_bw'=> $row[74],
            'axy_bx'=> $row[75],
            'axy_by'=> $row[76],
            'axy_bz'=> $row[77],
            'axy_ca'=> $row[78],
            'axy_cb'=> $row[79],
            'axy_cc'=> $row[80],
            'axy_cd'=> $row[81],
            'axy_ce'=> $row[82],
            'axy_cf'=> $row[83],
            'axy_cg'=> $row[84],
            'axy_ch'=> $row[85],
            'axy_ci'=> $row[86],
            'axy_cj'=> $row[87],
            'axy_ck'=> $row[88],
            'axy_cl'=> $row[89],
            'axy_cm'=> $row[90],
            'axy_cn'=> $row[91],
            'axy_co'=> $row[92],
            'axy_cp'=> $row[93],
            'axy_cq'=> $row[94],
            'axy_cr'=> $row[95],
            'axy_cs'=> $row[96],
        ]);
    }
}