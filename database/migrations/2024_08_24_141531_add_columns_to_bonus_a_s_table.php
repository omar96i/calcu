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
        Schema::table('bonus_a_s', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('bonus_a_l')->nullable();
            $table->string('bonus_a_m')->nullable();
            $table->string('bonus_a_n')->nullable();
            $table->string('bonus_a_o')->nullable();
            $table->string('bonus_a_p')->nullable();
            $table->string('bonus_a_q')->nullable();
            $table->string('bonus_a_r')->nullable();
            $table->string('bonus_a_s')->nullable();
            $table->string('bonus_a_t')->nullable();
            $table->string('bonus_a_u')->nullable();
            $table->string('bonus_a_v')->nullable();
            $table->string('bonus_a_w')->nullable();
            $table->string('bonus_a_x')->nullable();
            $table->string('bonus_a_y')->nullable();
            $table->string('bonus_a_z')->nullable();
            $table->string('bonus_a_aa')->nullable();
            $table->string('bonus_a_ab')->nullable();
            $table->string('bonus_a_ac')->nullable();
            $table->string('bonus_a_ad')->nullable();
            $table->string('bonus_a_ae')->nullable();
            $table->string('bonus_a_af')->nullable();
            $table->string('bonus_a_ag')->nullable();
            $table->string('bonus_a_ah')->nullable();
            $table->string('bonus_a_ai')->nullable();
            $table->string('bonus_a_aj')->nullable();
            $table->string('bonus_a_ak')->nullable();
            $table->string('bonus_a_al')->nullable();
            $table->string('bonus_a_am')->nullable();
            $table->string('bonus_a_an')->nullable();
            $table->string('bonus_a_ao')->nullable();
            $table->string('bonus_a_ap')->nullable();
            $table->string('bonus_a_aq')->nullable();
            $table->string('bonus_a_ar')->nullable();
            $table->string('bonus_a_as')->nullable();
            $table->string('bonus_a_at')->nullable();
            $table->string('bonus_a_au')->nullable();
            $table->string('bonus_a_av')->nullable();
            $table->string('bonus_a_aw')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bonus_a_s', function (Blueprint $table) {
            //
        });
    }
};
