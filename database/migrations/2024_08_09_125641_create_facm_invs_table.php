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
        Schema::create('facm_invs', function (Blueprint $table) {
            $table->id();
            $table->string('Facm_inv_a')->nullable();
            $table->string('Facm_inv_b')->nullable();
            $table->string('Facm_inv_c')->nullable();
            $table->string('Facm_inv_d')->nullable();
            $table->string('Facm_inv_e')->nullable();
            $table->string('Facm_inv_f')->nullable();
            $table->double('Facm_inv_g')->nullable();
            $table->double('Facm_inv_h')->nullable();
            $table->double('Facm_inv_i')->nullable();
            $table->double('Facm_inv_j')->nullable();
            $table->double('Facm_inv_k')->nullable();
            $table->double('Facm_inv_l')->nullable();
            $table->double('Facm_inv_m')->nullable();
            $table->double('Facm_inv_n')->nullable();
            $table->double('Facm_inv_o')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facm_invs');
    }
};
