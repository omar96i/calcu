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
        Schema::table('studies', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('studies_ad')->nullable();
            $table->string('studies_ae')->nullable();
            $table->string('studies_af')->nullable();
            $table->string('studies_ag')->nullable();
            $table->string('studies_ah')->nullable();
            $table->string('studies_ai')->nullable();
            $table->string('studies_aj')->nullable();
            $table->string('studies_ak')->nullable();
            $table->string('studies_al')->nullable();
            $table->string('studies_am')->nullable();
            $table->string('studies_an')->nullable();
            $table->string('studies_ao')->nullable();
            $table->string('studies_ap')->nullable();
            $table->string('studies_aq')->nullable();
            $table->string('studies_ar')->nullable();
            $table->string('studies_as')->nullable();
            $table->string('studies_at')->nullable();
            $table->string('studies_au')->nullable();
            $table->string('studies_av')->nullable();
            $table->string('studies_aw')->nullable();
            $table->string('studies_ax')->nullable();
            $table->string('studies_ay')->nullable();
            $table->string('studies_az')->nullable();
            $table->string('studies_ba')->nullable();
            $table->string('studies_bb')->nullable();
            $table->string('studies_bc')->nullable();
            $table->string('studies_bd')->nullable();
            $table->string('studies_be')->nullable();
            $table->string('studies_bf')->nullable();
            $table->string('studies_bg')->nullable();
            $table->string('studies_bh')->nullable();
            $table->string('studies_bi')->nullable();
            $table->string('studies_bj')->nullable();
            $table->string('studies_bk')->nullable();
            $table->string('studies_bl')->nullable();
            $table->string('studies_bm')->nullable();
            $table->string('studies_bn')->nullable();
            $table->string('studies_bo')->nullable();
            $table->string('studies_bp')->nullable();
            $table->string('studies_bq')->nullable();
            $table->string('studies_br')->nullable();
            $table->string('studies_bs')->nullable();
            $table->string('studies_bt')->nullable();
            $table->string('studies_bu')->nullable();
            $table->string('studies_bv')->nullable();
            $table->string('studies_bw')->nullable();
            $table->string('studies_bx')->nullable();
            $table->string('studies_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('studies', function (Blueprint $table) {
            //
        });
    }
};
