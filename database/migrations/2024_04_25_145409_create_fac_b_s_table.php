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
        Schema::create('fac_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('age');
            $table->double('m_fac_1', 10,6);
            $table->double('m2_fac_1', 10,6);
            $table->double('f_fac_1', 10,6);
            $table->double('f2_fac_1', 10,6);
            $table->double('m_fac_2', 10,6);
            $table->double('m2_fac_2', 10,6);
            $table->double('f_fac_2', 10,6);
            $table->double('f2_fac_2', 10,6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fac_b_s');
    }
};
