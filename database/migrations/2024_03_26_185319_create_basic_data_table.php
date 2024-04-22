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
        Schema::create('basic_data', function (Blueprint $table) {
            $table->id();
            $table->year('calculation_year')->nullable();
            $table->date('calculation_date')->nullable();
            $table->float('salary', 10,2)->nullable();
            $table->float('admon_expenses', 8,3)->nullable();
            $table->float('k', 8,3)->nullable();
            $table->float('estimated_inflation_rate', 8,3)->nullable();
            $table->float('estimated_annual_inflation_rate', 8,3)->nullable();
            $table->float('monthly_estimated_inflation_rate', 8,3)->nullable();
            $table->float('semiannual_estimated_inflation_rate', 8,3)->nullable();
            $table->float('annual_technical_rate', 8,3)->nullable();
            $table->float('monthly_technical_rate', 8,3)->nullable();
            $table->float('semiannual_technical_rate', 8,3)->nullable();
            $table->tinyInteger('age_difference')->nullable();
            $table->float('safety_factor')->nullable();
            $table->date('legislative_act')->nullable();
            $table->float('days_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_data');
    }
};
