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
            $table->string('calculation_year')->nullable();
            $table->date('calculation_date')->nullable();
            $table->string('salary')->nullable();
            $table->string('admon_expenses')->nullable();
            $table->string('k')->nullable();
            $table->string('estimated_inflation_rate')->nullable();
            $table->string('estimated_annual_inflation_rate')->nullable();
            $table->string('monthly_estimated_inflation_rate')->nullable();
            $table->string('semiannual_estimated_inflation_rate')->nullable();
            $table->string('annual_technical_rate')->nullable();
            $table->string('monthly_technical_rate')->nullable();
            $table->string('semiannual_technical_rate')->nullable();
            $table->string('age_difference')->nullable();
            $table->string('safety_factor')->nullable();
            $table->date('legislative_act')->nullable();
            $table->string('days_year')->nullable();
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
