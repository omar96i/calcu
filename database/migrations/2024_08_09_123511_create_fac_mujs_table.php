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
        Schema::create('fac_mujs', function (Blueprint $table) {
            $table->id();
            $table->string('Fac_muj_a')->nullable();
            $table->string('Fac_muj_b')->nullable();
            $table->string('Fac_muj_c')->nullable();
            $table->string('Fac_muj_d')->nullable();
            $table->string('Fac_muj_e')->nullable();
            $table->string('Fac_muj_f')->nullable();
            $table->double('Fac_muj_g')->nullable();
            $table->double('Fac_muj_h')->nullable();
            $table->double('Fac_muj_i')->nullable();
            $table->double('Fac_muj_j')->nullable();
            $table->double('Fac_muj_k')->nullable();
            $table->double('Fac_muj_l')->nullable();
            $table->double('Fac_muj_m')->nullable();
            $table->double('Fac_muj_n')->nullable();
            $table->double('Fac_muj_o')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fac_mujs');
    }
};
