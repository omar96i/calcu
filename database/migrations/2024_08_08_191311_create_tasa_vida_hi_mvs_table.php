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
        Schema::create('tasa_vida_hi_mvs', function (Blueprint $table) {
            $table->id();
            $table->string('tasa_vida_hi_a')->nullable();
            $table->string('tasa_vida_hi_b')->nullable();
            $table->string('tasa_vida_hi_c')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasa_vida_hi_mvs');
    }
};
