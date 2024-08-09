<?php

namespace App\Imports;

use App\Models\Axy_mv_mi;
use Maatwebsite\Excel\Concerns\ToModel;

class Axy_mv_mi_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Axy_mv_mi([
        'axy_mv_mi_a'=> $row[0],
        'axy_mv_mi_b'=> $row[1],
        'axy_mv_mi_c'=> $row[2],
        'axy_mv_mi_d'=> $row[3],
        'axy_mv_mi_e'=> $row[4],
        'axy_mv_mi_f'=> $row[5],
        'axy_mv_mi_g'=> $row[6],
        'axy_mv_mi_h'=> $row[7],
        'axy_mv_mi_i'=> $row[8],
        'axy_mv_mi_j'=> $row[9],
        'axy_mv_mi_k'=> $row[10],
        'axy_mv_mi_l'=> $row[11],
        'axy_mv_mi_m'=> $row[12],
        'axy_mv_mi_n'=> $row[13],
        'axy_mv_mi_o'=> $row[14],
        'axy_mv_mi_p'=> $row[15],
        'axy_mv_mi_q'=> $row[16],
        'axy_mv_mi_r'=> $row[17],
        'axy_mv_mi_s'=> $row[18],
        'axy_mv_mi_t'=> $row[19],
        'axy_mv_mi_u'=> $row[20],
        'axy_mv_mi_v'=> $row[21],
        'axy_mv_mi_w'=> $row[22],
        'axy_mv_mi_x'=> $row[23],
        'axy_mv_mi_y'=> $row[24],
        'axy_mv_mi_z'=> $row[25],
        'axy_mv_mi_aa'=> $row[26],
        'axy_mv_mi_ab'=> $row[27],
        'axy_mv_mi_ac'=> $row[28],
        'axy_mv_mi_ad'=> $row[29],
        'axy_mv_mi_ae'=> $row[30],
        'axy_mv_mi_af'=> $row[31],
        'axy_mv_mi_ag'=> $row[32],
        'axy_mv_mi_ah'=> $row[33],
        'axy_mv_mi_ai'=> $row[34],
        'axy_mv_mi_aj'=> $row[35],
        'axy_mv_mi_ak'=> $row[36],
        'axy_mv_mi_al'=> $row[37],
        'axy_mv_mi_am'=> $row[38],
        'axy_mv_mi_an'=> $row[39],
        'axy_mv_mi_ao'=> $row[40],
        'axy_mv_mi_ap'=> $row[41],
        'axy_mv_mi_aq'=> $row[42],
        'axy_mv_mi_ar'=> $row[43],
        'axy_mv_mi_as'=> $row[44],
        'axy_mv_mi_at'=> $row[45],
        'axy_mv_mi_au'=> $row[46],
        'axy_mv_mi_av'=> $row[47],
        'axy_mv_mi_aw'=> $row[48],
        'axy_mv_mi_ax'=> $row[49],
        'axy_mv_mi_ay'=> $row[50],
        'axy_mv_mi_az'=> $row[51],
        'axy_mv_mi_ba'=> $row[52],
        'axy_mv_mi_bb'=> $row[53],
        'axy_mv_mi_bc'=> $row[54],
        'axy_mv_mi_bd'=> $row[55],
        'axy_mv_mi_be'=> $row[56],
        'axy_mv_mi_bf'=> $row[57],
        'axy_mv_mi_bg'=> $row[58],
        'axy_mv_mi_bh'=> $row[59],
        'axy_mv_mi_bi'=> $row[60],
        'axy_mv_mi_bj'=> $row[61],
        'axy_mv_mi_bk'=> $row[62],
        'axy_mv_mi_bl'=> $row[63],
        'axy_mv_mi_bm'=> $row[64],
        'axy_mv_mi_bn'=> $row[65],
        'axy_mv_mi_bo'=> $row[66],
        'axy_mv_mi_bp'=> $row[67],
        'axy_mv_mi_bq'=> $row[68],
        'axy_mv_mi_br'=> $row[69],
        'axy_mv_mi_bs'=> $row[70],
        'axy_mv_mi_bt'=> $row[71],
        'axy_mv_mi_bu'=> $row[72],
        'axy_mv_mi_bv'=> $row[73],
        'axy_mv_mi_bw'=> $row[74],
        'axy_mv_mi_bx'=> $row[75],
        'axy_mv_mi_by'=> $row[76],
        'axy_mv_mi_bz'=> $row[77],
        'axy_mv_mi_ca'=> $row[78],
        'axy_mv_mi_cb'=> $row[79],
        'axy_mv_mi_cc'=> $row[80],
        'axy_mv_mi_cd'=> $row[81],
        'axy_mv_mi_ce'=> $row[82],
        'axy_mv_mi_cf'=> $row[83],
        'axy_mv_mi_cg'=> $row[84],
        'axy_mv_mi_ch'=> $row[85],
        'axy_mv_mi_ci'=> $row[86],
        'axy_mv_mi_cj'=> $row[87],
        'axy_mv_mi_ck'=> $row[88],
        'axy_mv_mi_cl'=> $row[89],
        'axy_mv_mi_cm'=> $row[90],
        'axy_mv_mi_cn'=> $row[91],
        'axy_mv_mi_co'=> $row[92],
        'axy_mv_mi_cp'=> $row[93],
        'axy_mv_mi_cq'=> $row[94],
        'axy_mv_mi_cr'=> $row[95],
        'axy_mv_mi_cs'=> $row[96],
        'axy_mv_mi_ct'=> $row[97],
        'axy_mv_mi_cu'=> $row[98],
        'axy_mv_mi_cv'=> $row[99],
        'axy_mv_mi_cw'=> $row[100],
        'axy_mv_mi_cx'=> $row[101],
        'axy_mv_mi_cy'=> $row[102],
        'axy_mv_mi_cz'=> $row[103],
        'axy_mv_mi_da'=> $row[104],
        'axy_mv_mi_db'=> $row[105],
        'axy_mv_mi_dc'=> $row[106],
        'axy_mv_mi_dd'=> $row[107],
        'axy_mv_mi_de'=> $row[108],
        'axy_mv_mi_df'=> $row[109],
        'axy_mv_mi_dg'=> $row[110],
        'axy_mv_mi_dh'=> $row[111],
        ]);
    }
}
