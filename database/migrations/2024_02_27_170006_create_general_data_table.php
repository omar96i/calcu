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
        Schema::create('general_data', function (Blueprint $table) {
            $table->id();
            $table->string('calculation_year');
            $table->date('calculation_date');
            $table->string('minimum_salary');
            $table->string('administration_expenses');
            $table->string('k_growth');
            $table->string('technical_rate');
            $table->string('expected_inflation_rate');
            $table->string('estimated_rate');
            $table->string('age_difference');
            $table->string('safety_factor');
            $table->string('annual_cpi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_data');
    }
};
