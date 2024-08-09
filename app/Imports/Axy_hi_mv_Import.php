<?php

namespace App\Imports;

use App\Models\Axy_hi_mv;
use Maatwebsite\Excel\Concerns\ToModel;

class Axy_hi_mv_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Axy_hi_mv([
        'axy_hi_mv_a'=> $row[0],
        'axy_hi_mv_b'=> $row[1],
        'axy_hi_mv_c'=> $row[2],
        'axy_hi_mv_d'=> $row[3],
        'axy_hi_mv_e'=> $row[4],
        'axy_hi_mv_f'=> $row[5],
        'axy_hi_mv_g'=> $row[6],
        'axy_hi_mv_h'=> $row[7],
        'axy_hi_mv_i'=> $row[8],
        'axy_hi_mv_j'=> $row[9],
        'axy_hi_mv_k'=> $row[10],
        'axy_hi_mv_l'=> $row[11],
        'axy_hi_mv_m'=> $row[12],
        'axy_hi_mv_n'=> $row[13],
        'axy_hi_mv_o'=> $row[14],
        'axy_hi_mv_p'=> $row[15],
        'axy_hi_mv_q'=> $row[16],
        'axy_hi_mv_r'=> $row[17],
        'axy_hi_mv_s'=> $row[18],
        'axy_hi_mv_t'=> $row[19],
        'axy_hi_mv_u'=> $row[20],
        'axy_hi_mv_v'=> $row[21],
        'axy_hi_mv_w'=> $row[22],
        'axy_hi_mv_x'=> $row[23],
        'axy_hi_mv_y'=> $row[24],
        'axy_hi_mv_z'=> $row[25],
        'axy_hi_mv_aa'=> $row[26],
        'axy_hi_mv_ab'=> $row[27],
        'axy_hi_mv_ac'=> $row[28],
        'axy_hi_mv_ad'=> $row[29],
        'axy_hi_mv_ae'=> $row[30],
        'axy_hi_mv_af'=> $row[31],
        'axy_hi_mv_ag'=> $row[32],
        'axy_hi_mv_ah'=> $row[33],
        'axy_hi_mv_ai'=> $row[34],
        'axy_hi_mv_aj'=> $row[35],
        'axy_hi_mv_ak'=> $row[36],
        'axy_hi_mv_al'=> $row[37],
        'axy_hi_mv_am'=> $row[38],
        'axy_hi_mv_an'=> $row[39],
        'axy_hi_mv_ao'=> $row[40],
        'axy_hi_mv_ap'=> $row[41],
        'axy_hi_mv_aq'=> $row[42],
        'axy_hi_mv_ar'=> $row[43],
        'axy_hi_mv_as'=> $row[44],
        'axy_hi_mv_at'=> $row[45],
        'axy_hi_mv_au'=> $row[46],
        'axy_hi_mv_av'=> $row[47],
        'axy_hi_mv_aw'=> $row[48],
        'axy_hi_mv_ax'=> $row[49],
        'axy_hi_mv_ay'=> $row[50],
        'axy_hi_mv_az'=> $row[51],
        'axy_hi_mv_ba'=> $row[52],
        'axy_hi_mv_bb'=> $row[53],
        'axy_hi_mv_bc'=> $row[54],
        'axy_hi_mv_bd'=> $row[55],
        'axy_hi_mv_be'=> $row[56],
        'axy_hi_mv_bf'=> $row[57],
        'axy_hi_mv_bg'=> $row[58],
        'axy_hi_mv_bh'=> $row[59],
        'axy_hi_mv_bi'=> $row[60],
        'axy_hi_mv_bj'=> $row[61],
        'axy_hi_mv_bk'=> $row[62],
        'axy_hi_mv_bl'=> $row[63],
        'axy_hi_mv_bm'=> $row[64],
        'axy_hi_mv_bn'=> $row[65],
        'axy_hi_mv_bo'=> $row[66],
        'axy_hi_mv_bp'=> $row[67],
        'axy_hi_mv_bq'=> $row[68],
        'axy_hi_mv_br'=> $row[69],
        'axy_hi_mv_bs'=> $row[70],
        'axy_hi_mv_bt'=> $row[71],
        'axy_hi_mv_bu'=> $row[72],
        'axy_hi_mv_bv'=> $row[73],
        'axy_hi_mv_bw'=> $row[74],
        'axy_hi_mv_bx'=> $row[75],
        'axy_hi_mv_by'=> $row[76],
        'axy_hi_mv_bz'=> $row[77],
        'axy_hi_mv_ca'=> $row[78],
        'axy_hi_mv_cb'=> $row[79],
        'axy_hi_mv_cc'=> $row[80],
        'axy_hi_mv_cd'=> $row[81],
        'axy_hi_mv_ce'=> $row[82],
        'axy_hi_mv_cf'=> $row[83],
        'axy_hi_mv_cg'=> $row[84],
        'axy_hi_mv_ch'=> $row[85],
        'axy_hi_mv_ci'=> $row[86],
        'axy_hi_mv_cj'=> $row[87],
        'axy_hi_mv_ck'=> $row[88],
        'axy_hi_mv_cl'=> $row[89],
        'axy_hi_mv_cm'=> $row[90],
        'axy_hi_mv_cn'=> $row[91],
        'axy_hi_mv_co'=> $row[92],
        'axy_hi_mv_cp'=> $row[93],
        'axy_hi_mv_cq'=> $row[94],
        'axy_hi_mv_cr'=> $row[95],
        'axy_hi_mv_cs'=> $row[96],
        ]);
    }
}
