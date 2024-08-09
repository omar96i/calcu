<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('axy_mv_mvs', function (Blueprint $table) {
            $table->id();
            $table->string('axy_mv_mv_a')->nullable();
            $table->string('axy_mv_mv_b')->nullable();
            $table->string('axy_mv_mv_c')->nullable();
            $table->string('axy_mv_mv_d')->nullable();
            $table->string('axy_mv_mv_e')->nullable();
            $table->string('axy_mv_mv_f')->nullable();
            $table->double('axy_mv_mv_g')->nullable();
            $table->double('axy_mv_mv_h')->nullable();
            $table->double('axy_mv_mv_i')->nullable();
            $table->double('axy_mv_mv_j')->nullable();
            $table->double('axy_mv_mv_k')->nullable();
            $table->double('axy_mv_mv_l')->nullable();
            $table->double('axy_mv_mv_m')->nullable();
            $table->double('axy_mv_mv_n')->nullable();
            $table->double('axy_mv_mv_o')->nullable();
            $table->double('axy_mv_mv_p')->nullable();
            $table->double('axy_mv_mv_q')->nullable();
            $table->string('axy_mv_mv_r')->nullable();
            $table->string('axy_mv_mv_s')->nullable();
            $table->string('axy_mv_mv_t')->nullable();
            $table->string('axy_mv_mv_u')->nullable();
            $table->string('axy_mv_mv_v')->nullable();
            $table->float('axy_mv_mv_w')->nullable();
            $table->float('axy_mv_mv_x')->nullable();
            $table->float('axy_mv_mv_y')->nullable();
            $table->float('axy_mv_mv_z')->nullable();
            $table->float('axy_mv_mv_aa')->nullable();
            $table->float('axy_mv_mv_ab')->nullable();
            $table->float('axy_mv_mv_ac')->nullable();
            $table->float('axy_mv_mv_ad')->nullable();
            $table->float('axy_mv_mv_ae')->nullable();
            $table->string('axy_mv_mv_af')->nullable();
            $table->string('axy_mv_mv_ag')->nullable();
            $table->string('axy_mv_mv_ah')->nullable();
            $table->string('axy_mv_mv_ai')->nullable();
            $table->string('axy_mv_mv_aj')->nullable();
            $table->string('axy_mv_mv_ak')->nullable();
            $table->double('axy_mv_mv_al')->nullable();
            $table->double('axy_mv_mv_am')->nullable();
            $table->double('axy_mv_mv_an')->nullable();
            $table->double('axy_mv_mv_ao')->nullable();
            $table->double('axy_mv_mv_ap')->nullable();
            $table->string('axy_mv_mv_aq')->nullable();
            $table->double('axy_mv_mv_ar')->nullable();
            $table->double('axy_mv_mv_as')->nullable();
            $table->double('axy_mv_mv_at')->nullable();
            $table->double('axy_mv_mv_au')->nullable();
            $table->string('axy_mv_mv_av')->nullable();
            $table->string('axy_mv_mv_aw')->nullable();
            $table->double('axy_mv_mv_ax')->nullable();
            $table->double('axy_mv_mv_ay')->nullable();
            $table->string('axy_mv_mv_az')->nullable();
            $table->string('axy_mv_mv_ba')->nullable();
            $table->string('axy_mv_mv_bb')->nullable();
            $table->string('axy_mv_mv_bc')->nullable();
            $table->double('axy_mv_mv_bd')->nullable();
            $table->double('axy_mv_mv_be')->nullable();
            $table->double('axy_mv_mv_bf')->nullable();
            $table->double('axy_mv_mv_bg')->nullable();
            $table->double('axy_mv_mv_bh')->nullable();
            $table->double('axy_mv_mv_bi')->nullable();
            $table->double('axy_mv_mv_bj')->nullable();
            $table->double('axy_mv_mv_bk')->nullable();
            $table->double('axy_mv_mv_bl')->nullable();
            $table->string('axy_mv_mv_bm')->nullable();
            $table->string('axy_mv_mv_bn')->nullable();
            $table->string('axy_mv_mv_bo')->nullable();
            $table->string('axy_mv_mv_bp')->nullable();
            $table->string('axy_mv_mv_bq')->nullable();
            $table->double('axy_mv_mv_br')->nullable();
            $table->double('axy_mv_mv_bs')->nullable();
            $table->double('axy_mv_mv_bt')->nullable();
            $table->double('axy_mv_mv_bu')->nullable();
            $table->double('axy_mv_mv_bv')->nullable();
            $table->double('axy_mv_mv_bw')->nullable();
            $table->double('axy_mv_mv_bx')->nullable();
            $table->double('axy_mv_mv_by')->nullable();
            $table->string('axy_mv_mv_bz')->nullable();
            $table->double('axy_mv_mv_ca')->nullable();
            $table->string('axy_mv_mv_cb')->nullable();
            $table->string('axy_mv_mv_cc')->nullable();
            $table->string('axy_mv_mv_cd')->nullable();
            $table->string('axy_mv_mv_ce')->nullable();
            $table->string('axy_mv_mv_cf')->nullable();
            $table->string('axy_mv_mv_cg')->nullable();
            $table->double('axy_mv_mv_ch')->nullable();
            $table->double('axy_mv_mv_ci')->nullable();
            $table->double('axy_mv_mv_cj')->nullable();
            $table->double('axy_mv_mv_ck')->nullable();
            $table->double('axy_mv_mv_cl')->nullable();
            $table->double('axy_mv_mv_cm')->nullable();
            $table->string('axy_mv_mv_cn')->nullable();
            $table->string('axy_mv_mv_co')->nullable();
            $table->string('axy_mv_mv_cp')->nullable();
            $table->string('axy_mv_mv_cq')->nullable();
            $table->string('axy_mv_mv_cr')->nullable();
            $table->double('axy_mv_mv_cs')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('axy_mv_mvs');
    }
};
