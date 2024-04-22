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
            $table->year('calculation_year');
            $table->date('calculation_date');
            $table->float('minimum_salary', 10,2);
            $table->float('administration_expenses');
            $table->float('k_growth', 8,3);
            $table->float('technical_rate', 8,2);
            $table->float('expected_inflation_rate', 8,2);
            $table->float('estimated_rate', 8,2);
            $table->tinyInteger('age_difference');
            $table->float('safety_factor');
            $table->float('annual_cpi');
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
