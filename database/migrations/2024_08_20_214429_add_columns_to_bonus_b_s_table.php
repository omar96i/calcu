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
        Schema::table('bonus_b_s', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('bonus_b_m')->nullable();
            $table->string('bonus_b_n')->nullable();
            $table->string('bonus_b_o')->nullable();
            $table->string('bonus_b_p')->nullable();
            $table->string('bonus_b_q')->nullable();
            $table->string('bonus_b_r')->nullable();
            $table->string('bonus_b_s')->nullable();
            $table->string('bonus_b_t')->nullable();
            $table->string('bonus_b_v')->nullable();
            $table->string('bonus_b_w')->nullable();
            $table->string('bonus_b_x')->nullable();
            $table->string('bonus_b_y')->nullable();
            $table->string('bonus_b_z')->nullable();
            $table->string('bonus_b_aa')->nullable();
            $table->string('bonus_b_ab')->nullable();
            $table->string('bonus_b_ac')->nullable();
            $table->string('bonus_b_ad')->nullable();
            $table->string('bonus_b_af')->nullable();
            $table->string('bonus_b_ag')->nullable();
            $table->string('bonus_b_ah')->nullable();
            $table->string('bonus_b_ai')->nullable();
            $table->string('bonus_b_aj')->nullable();
            $table->string('bonus_b_ak')->nullable();
            $table->string('bonus_b_al')->nullable();
            $table->string('bonus_b_am')->nullable();
            $table->string('bonus_b_an')->nullable();
            $table->string('bonus_b_ao')->nullable();
            $table->string('bonus_b_ap')->nullable();
            $table->string('bonus_b_aq')->nullable();
            $table->string('bonus_b_ar')->nullable();
            $table->string('bonus_b_as')->nullable();
            $table->string('bonus_b_at')->nullable();
            $table->string('bonus_b_av')->nullable();
            $table->string('bonus_b_aw')->nullable();
            $table->string('bonus_b_ax')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bonus_b_s', function (Blueprint $table) {
            //
        });
    }
};
