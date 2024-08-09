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
        Schema::create('dxies', function (Blueprint $table) {
            $table->id();
            $table->string('dxy_a')->nullable();
            $table->string('dxy_b')->nullable();
            $table->string('dxy_c')->nullable();
            $table->string('dxy_d')->nullable();
            $table->string('dxy_e')->nullable();
            $table->string('dxy_f')->nullable();
            $table->double('dxy_g')->nullable();
            $table->double('dxy_h')->nullable();
            $table->double('dxy_i')->nullable();
            $table->double('dxy_j')->nullable();
            $table->double('dxy_k')->nullable();
            $table->double('dxy_l')->nullable();
            $table->double('dxy_m')->nullable();
            $table->double('dxy_n')->nullable();
            $table->double('dxy_o')->nullable();
            $table->double('dxy_p')->nullable();
            $table->double('dxy_q')->nullable();
            $table->string('dxy_r')->nullable();
            $table->string('dxy_s')->nullable();
            $table->string('dxy_t')->nullable();
            $table->string('dxy_u')->nullable();
            $table->string('dxy_v')->nullable();
            $table->float('dxy_w',20)->nullable();
            $table->float('dxy_x',20)->nullable();
            $table->float('dxy_y',20)->nullable();
            $table->float('dxy_z',20)->nullable();
            $table->float('dxy_aa',20)->nullable();
            $table->float('dxy_ab',20)->nullable();
            $table->float('dxy_ac',20)->nullable();
            $table->float('dxy_ad',20)->nullable();
            $table->float('dxy_ae',20)->nullable();
            $table->string('dxy_af')->nullable();
            $table->string('dxy_ag')->nullable();
            $table->string('dxy_ah')->nullable();
            $table->string('dxy_ai')->nullable();
            $table->string('dxy_aj')->nullable();
            $table->string('dxy_ak')->nullable();
            $table->double('dxy_al')->nullable();
            $table->double('dxy_am')->nullable();
            $table->double('dxy_an')->nullable();
            $table->double('dxy_ao')->nullable();
            $table->double('dxy_ap')->nullable();
            $table->string('dxy_aq')->nullable();
            $table->double('dxy_ar')->nullable();
            $table->double('dxy_as')->nullable();
            $table->double('dxy_at')->nullable();
            $table->double('dxy_au')->nullable();
            $table->string('dxy_av')->nullable();
            $table->string('dxy_aw')->nullable();
            $table->double('dxy_ax')->nullable();
            $table->double('dxy_ay')->nullable();
            $table->string('dxy_az')->nullable();
            $table->string('dxy_ba')->nullable();
            $table->string('dxy_bb')->nullable();
            $table->string('dxy_bc')->nullable();
            $table->double('dxy_bd')->nullable();
            $table->double('dxy_be')->nullable();
            $table->double('dxy_bf')->nullable();
            $table->double('dxy_bg')->nullable();
            $table->double('dxy_bh')->nullable();
            $table->double('dxy_bi')->nullable();
            $table->double('dxy_bj')->nullable();
            $table->double('dxy_bk')->nullable();
            $table->double('dxy_bl')->nullable();
            $table->string('dxy_bm')->nullable();
            $table->string('dxy_bn')->nullable();
            $table->string('dxy_bo')->nullable();
            $table->string('dxy_bp')->nullable();
            $table->string('dxy_bq')->nullable();
            $table->double('dxy_br')->nullable();
            $table->double('dxy_bs')->nullable();
            $table->double('dxy_bt')->nullable();
            $table->double('dxy_bu')->nullable();
            $table->double('dxy_bv')->nullable();
            $table->double('dxy_bw')->nullable();
            $table->double('dxy_bx')->nullable();
            $table->double('dxy_by')->nullable();
            $table->string('dxy_bz')->nullable();
            $table->double('dxy_ca')->nullable();
            $table->string('dxy_cb')->nullable();
            $table->string('dxy_cc')->nullable();
            $table->string('dxy_cd')->nullable();
            $table->string('dxy_ce')->nullable();
            $table->string('dxy_cf')->nullable();
            $table->string('dxy_cg')->nullable();
            $table->double('dxy_ch')->nullable();
            $table->double('dxy_ci')->nullable();
            $table->double('dxy_cj')->nullable();
            $table->double('dxy_ck')->nullable();
            $table->double('dxy_cl')->nullable();
            $table->double('dxy_cm')->nullable();
            $table->string('dxy_cn')->nullable();
            $table->string('dxy_co')->nullable();
            $table->string('dxy_cp')->nullable();
            $table->string('dxy_cq')->nullable();
            $table->string('dxy_cr')->nullable();
            $table->double('dxy_cs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dxies');
    }
};
