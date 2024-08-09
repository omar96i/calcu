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
        Schema::create('fach_invs', function (Blueprint $table) {
            $table->id();
            $table->string('Fach_inv_a')->nullable();
            $table->string('Fach_inv_b')->nullable();
            $table->string('Fach_inv_c')->nullable();
            $table->string('Fach_inv_d')->nullable();
            $table->string('Fach_inv_e')->nullable();
            $table->string('Fach_inv_f')->nullable();
            $table->double('Fach_inv_g')->nullable();
            $table->double('Fach_inv_h')->nullable();
            $table->double('Fach_inv_i')->nullable();
            $table->double('Fach_inv_j')->nullable();
            $table->double('Fach_inv_k')->nullable();
            $table->double('Fach_inv_l')->nullable();
            $table->double('Fach_inv_m')->nullable();
            $table->double('Fach_inv_n')->nullable();
            $table->double('Fach_inv_o')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fach_invs');
    }
};
