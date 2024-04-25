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
        Schema::create('fac__a_s', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->double('man_fac_1', 10,6);
            $table->double('woman_fac_1', 10,6);
            $table->double('man_fac_2', 10,6);
            $table->double('woman_fac_2', 10,6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fac__a_s');
    }
};
