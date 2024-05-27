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
        Schema::create('five_year_calculations', function (Blueprint $table) {
            $table->id();
            $table->string('cc')->nullable();
            $table->string('full_name')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('sec')->nullable();
            $table->string('basic_salary')->nullable();
            $table->string('named_date')->nullable();
            $table->string('licence')->nullable();
            $table->string('5_year')->nullable();
            $table->string('10_year')->nullable();
            $table->string('15_year')->nullable();
            $table->string('coment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('five_year_calculations');
    }
};
