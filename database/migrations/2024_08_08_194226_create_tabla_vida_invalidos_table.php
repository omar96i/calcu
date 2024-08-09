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
        Schema::create('tabla_vida_invalidos', function (Blueprint $table) {
            $table->id();
            $table->string('tabla_vida_a')->nullable();
            $table->string('tabla_vida_b')->nullable();
            $table->string('tabla_vida_c')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_vida_invalidos');
    }
};
