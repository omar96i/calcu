<?php

namespace App\Imports;

use App\Models\Axy_hi_hi;
use Maatwebsite\Excel\Concerns\ToModel;

class Axy_hi_hi_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Axy_hi_hi([
        'axy_hi_hi_a'=> $row[0],
        'axy_hi_hi_b'=> $row[1],
        'axy_hi_hi_c'=> $row[2],
        'axy_hi_hi_d'=> $row[3],
        'axy_hi_hi_e'=> $row[4],
        'axy_hi_hi_f'=> $row[5],
        'axy_hi_hi_g'=> $row[6],
        'axy_hi_hi_h'=> $row[7],
        'axy_hi_hi_i'=> $row[8],
        'axy_hi_hi_j'=> $row[9],
        'axy_hi_hi_k'=> $row[10],
        'axy_hi_hi_l'=> $row[11],
        'axy_hi_hi_m'=> $row[12],
        'axy_hi_hi_n'=> $row[13],
        'axy_hi_hi_o'=> $row[14],
        'axy_hi_hi_p'=> $row[15],
        'axy_hi_hi_q'=> $row[16],
        'axy_hi_hi_r'=> $row[17],
        'axy_hi_hi_s'=> $row[18],
        'axy_hi_hi_t'=> $row[19],
        'axy_hi_hi_u'=> $row[20],
        'axy_hi_hi_v'=> $row[21],
        'axy_hi_hi_w'=> $row[22],
        'axy_hi_hi_x'=> $row[23],
        'axy_hi_hi_y'=> $row[24],
        'axy_hi_hi_z'=> $row[25],
        'axy_hi_hi_aa'=> $row[26],
        'axy_hi_hi_ab'=> $row[27],
        'axy_hi_hi_ac'=> $row[28],
        'axy_hi_hi_ad'=> $row[29],
        'axy_hi_hi_ae'=> $row[30],
        'axy_hi_hi_af'=> $row[31],
        'axy_hi_hi_ag'=> $row[32],
        'axy_hi_hi_ah'=> $row[33],
        'axy_hi_hi_ai'=> $row[34],
        'axy_hi_hi_aj'=> $row[35],
        'axy_hi_hi_ak'=> $row[36],
        'axy_hi_hi_al'=> $row[37],
        'axy_hi_hi_am'=> $row[38],
        'axy_hi_hi_an'=> $row[39],
        'axy_hi_hi_ao'=> $row[40],
        'axy_hi_hi_ap'=> $row[41],
        'axy_hi_hi_aq'=> $row[42],
        'axy_hi_hi_ar'=> $row[43],
        'axy_hi_hi_as'=> $row[44],
        'axy_hi_hi_at'=> $row[45],
        'axy_hi_hi_au'=> $row[46],
        'axy_hi_hi_av'=> $row[47],
        'axy_hi_hi_aw'=> $row[48],
        'axy_hi_hi_ax'=> $row[49],
        'axy_hi_hi_ay'=> $row[50],
        'axy_hi_hi_az'=> $row[51],
        'axy_hi_hi_ba'=> $row[52],
        'axy_hi_hi_bb'=> $row[53],
        'axy_hi_hi_bc'=> $row[54],
        'axy_hi_hi_bd'=> $row[55],
        'axy_hi_hi_be'=> $row[56],
        'axy_hi_hi_bf'=> $row[57],
        'axy_hi_hi_bg'=> $row[58],
        'axy_hi_hi_bh'=> $row[59],
        'axy_hi_hi_bi'=> $row[60],
        'axy_hi_hi_bj'=> $row[61],
        'axy_hi_hi_bk'=> $row[62],
        'axy_hi_hi_bl'=> $row[63],
        'axy_hi_hi_bm'=> $row[64],
        'axy_hi_hi_bn'=> $row[65],
        'axy_hi_hi_bo'=> $row[66],
        'axy_hi_hi_bp'=> $row[67],
        'axy_hi_hi_bq'=> $row[68],
        'axy_hi_hi_br'=> $row[69],
        'axy_hi_hi_bs'=> $row[70],
        'axy_hi_hi_bt'=> $row[71],
        'axy_hi_hi_bu'=> $row[72],
        'axy_hi_hi_bv'=> $row[73],
        'axy_hi_hi_bw'=> $row[74],
        'axy_hi_hi_bx'=> $row[75],
        'axy_hi_hi_by'=> $row[76],
        'axy_hi_hi_bz'=> $row[77],
        'axy_hi_hi_ca'=> $row[78],
        'axy_hi_hi_cb'=> $row[79],
        'axy_hi_hi_cc'=> $row[80],
        'axy_hi_hi_cd'=> $row[81],
        'axy_hi_hi_ce'=> $row[82],
        'axy_hi_hi_cf'=> $row[83],
        'axy_hi_hi_cg'=> $row[84],
        'axy_hi_hi_ch'=> $row[85],
        'axy_hi_hi_ci'=> $row[86],
        'axy_hi_hi_cj'=> $row[87],
        'axy_hi_hi_ck'=> $row[88],
        'axy_hi_hi_cl'=> $row[89],
        'axy_hi_hi_cm'=> $row[90],
        'axy_hi_hi_cn'=> $row[91],
        'axy_hi_hi_co'=> $row[92],
        'axy_hi_hi_cp'=> $row[93],
        'axy_hi_hi_cq'=> $row[94],
        'axy_hi_hi_cr'=> $row[95],
        'axy_hi_hi_cs'=> $row[96],
        'axy_hi_hi_ct'=> $row[97],
        'axy_hi_hi_cu'=> $row[98],
        'axy_hi_hi_cv'=> $row[99],
        'axy_hi_hi_cw'=> $row[100],
        'axy_hi_hi_cx'=> $row[101],
        'axy_hi_hi_cy'=> $row[102],
        'axy_hi_hi_cz'=> $row[103],
        'axy_hi_hi_da'=> $row[104],
        'axy_hi_hi_db'=> $row[105],
        'axy_hi_hi_dc'=> $row[106],
        'axy_hi_hi_dd'=> $row[107],
        'axy_hi_hi_de'=> $row[108],
        'axy_hi_hi_df'=> $row[109],
        'axy_hi_hi_dg'=> $row[110],
        'axy_hi_hi_dh'=> $row[111],
        ]);
    }
}
