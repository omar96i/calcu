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
        Schema::create('axies', function (Blueprint $table) {
            $table->id();
            $table->string('axy_a')->nullable();
            $table->string('axy_b')->nullable();
            $table->string('axy_c')->nullable();
            $table->string('axy_d')->nullable();
            $table->string('axy_e')->nullable();
            $table->string('axy_f')->nullable();
            $table->double('axy_g')->nullable();
            $table->double('axy_h')->nullable();
            $table->double('axy_i')->nullable();
            $table->double('axy_j')->nullable();
            $table->double('axy_k')->nullable();
            $table->double('axy_l')->nullable();
            $table->double('axy_m')->nullable();
            $table->double('axy_n')->nullable();
            $table->double('axy_o')->nullable();
            $table->double('axy_p')->nullable();
            $table->double('axy_q')->nullable();
            $table->string('axy_r')->nullable();
            $table->string('axy_s')->nullable();
            $table->string('axy_t')->nullable();
            $table->string('axy_u')->nullable();
            $table->string('axy_v')->nullable();
            $table->float('axy_w')->nullable();
            $table->float('axy_x')->nullable();
            $table->float('axy_y')->nullable();
            $table->float('axy_z')->nullable();
            $table->float('axy_aa')->nullable();
            $table->float('axy_ab')->nullable();
            $table->float('axy_ac')->nullable();
            $table->float('axy_ad')->nullable();
            $table->float('axy_ae')->nullable();
            $table->string('axy_af')->nullable();
            $table->string('axy_ag')->nullable();
            $table->string('axy_ah')->nullable();
            $table->string('axy_ai')->nullable();
            $table->string('axy_aj')->nullable();
            $table->string('axy_ak')->nullable();
            $table->double('axy_al')->nullable();
            $table->double('axy_am')->nullable();
            $table->double('axy_an')->nullable();
            $table->double('axy_ao')->nullable();
            $table->double('axy_ap')->nullable();
            $table->string('axy_aq')->nullable();
            $table->double('axy_ar')->nullable();
            $table->double('axy_as')->nullable();
            $table->double('axy_at')->nullable();
            $table->double('axy_au')->nullable();
            $table->string('axy_av')->nullable();
            $table->string('axy_aw')->nullable();
            $table->double('axy_ax')->nullable();
            $table->double('axy_ay')->nullable();
            $table->string('axy_az')->nullable();
            $table->string('axy_ba')->nullable();
            $table->string('axy_bb')->nullable();
            $table->string('axy_bc')->nullable();
            $table->double('axy_bd')->nullable();
            $table->double('axy_be')->nullable();
            $table->double('axy_bf')->nullable();
            $table->double('axy_bg')->nullable();
            $table->double('axy_bh')->nullable();
            $table->double('axy_bi')->nullable();
            $table->double('axy_bj')->nullable();
            $table->double('axy_bk')->nullable();
            $table->double('axy_bl')->nullable();
            $table->string('axy_bm')->nullable();
            $table->string('axy_bn')->nullable();
            $table->string('axy_bo')->nullable();
            $table->string('axy_bp')->nullable();
            $table->string('axy_bq')->nullable();
            $table->double('axy_br')->nullable();
            $table->double('axy_bs')->nullable();
            $table->double('axy_bt')->nullable();
            $table->double('axy_bu')->nullable();
            $table->double('axy_bv')->nullable();
            $table->double('axy_bw')->nullable();
            $table->double('axy_bx')->nullable();
            $table->double('axy_by')->nullable();
            $table->string('axy_bz')->nullable();
            $table->double('axy_ca')->nullable();
            $table->string('axy_cb')->nullable();
            $table->string('axy_cc')->nullable();
            $table->string('axy_cd')->nullable();
            $table->string('axy_ce')->nullable();
            $table->string('axy_cf')->nullable();
            $table->string('axy_cg')->nullable();
            $table->double('axy_ch')->nullable();
            $table->double('axy_ci')->nullable();
            $table->double('axy_cj')->nullable();
            $table->double('axy_ck')->nullable();
            $table->double('axy_cl')->nullable();
            $table->double('axy_cm')->nullable();
            $table->string('axy_cn')->nullable();
            $table->string('axy_co')->nullable();
            $table->string('axy_cp')->nullable();
            $table->string('axy_cq')->nullable();
            $table->string('axy_cr')->nullable();
            $table->double('axy_cs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('axies');
    }
};
