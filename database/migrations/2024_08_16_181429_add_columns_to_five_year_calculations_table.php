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
        Schema::table('five_year_calculations', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('five_l')->nullable();
            $table->string('five_m')->nullable();
            $table->string('five_n')->nullable();
            $table->string('five_o')->nullable();
            $table->string('five_p')->nullable();
            $table->string('five_q')->nullable();
            $table->string('five_r')->nullable();
            $table->string('five_s')->nullable();
            $table->string('five_t')->nullable();
            $table->string('five_u')->nullable();
            $table->string('five_v')->nullable();
            $table->string('five_w')->nullable();
            $table->string('five_x')->nullable();
            $table->string('five_y')->nullable();
            $table->string('five_z')->nullable();
            $table->string('five_aa')->nullable();
            $table->string('five_ab')->nullable();
            $table->string('status')->default('incomplete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('five_year_calculations', function (Blueprint $table) {
            //
        });
    }
};
