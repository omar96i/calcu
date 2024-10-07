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
        Schema::create('data_generals', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('type_company');
            $table->string('year')->nullable();
            $table->string('parametros_17')->nullable();
            $table->string('smmlv')->nullable();
            $table->string('k')->nullable();
            $table->string('j')->nullable();
            $table->string('js')->nullable();
            $table->string('jm')->nullable();
            $table->string('i')->nullable();
            $table->string('ttm')->nullable();
            $table->string('fecha_calculo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_generals');
    }
};
