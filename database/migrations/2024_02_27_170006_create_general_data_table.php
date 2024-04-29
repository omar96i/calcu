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
            $table->year('calculation_year')->nullable();
            $table->date('calculation_date')->nullable();
            $table->float('minimum_salary', 10,2)->nullable();
            $table->float('administration_expenses')->nullable();
            $table->float('k_growth', 8,3)->nullable();
            $table->float('technical_rate', 8,2)->nullable();
            $table->float('expected_inflation_rate', 8,2)->nullable();
            $table->float('estimated_rate', 8,2)->nullable();
            $table->tinyInteger('age_difference')->nullable();
            $table->float('safety_factor')->nullable();
            $table->float('annual_cpi')->nullable();
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
