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
        Schema::create('fac_homs', function (Blueprint $table) {
            $table->id();
            $table->string('Fac_hom_a')->nullable();
            $table->string('Fac_hom_b')->nullable();
            $table->string('Fac_hom_c')->nullable();
            $table->string('Fac_hom_d')->nullable();
            $table->string('Fac_hom_e')->nullable();
            $table->string('Fac_hom_f')->nullable();
            $table->double('Fac_hom_g')->nullable();
            $table->double('Fac_hom_h')->nullable();
            $table->double('Fac_hom_i')->nullable();
            $table->double('Fac_hom_j')->nullable();
            $table->double('Fac_hom_k')->nullable();
            $table->double('Fac_hom_l')->nullable();
            $table->double('Fac_hom_m')->nullable();
            $table->double('Fac_hom_n')->nullable();
            $table->double('Fac_hom_o')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fac_homs');
    }
};
