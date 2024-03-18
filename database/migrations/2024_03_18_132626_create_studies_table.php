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
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actuarial_group_id')->constrained();
            $table->string('cc', 40)->nullable();
            $table->string('name', 40)->nullable();
            $table->string('sex', 40)->nullable();
            $table->string('pension_class', 40)->nullable();
            $table->string('pension_situation', 40)->nullable();
            $table->string('civil_status', 40)->nullable();
            $table->string('birth_date', 40)->nullable();
            $table->string('causative_state', 40)->nullable();
            $table->string('date_of_birth_spouse', 40)->nullable();
            $table->string('spouse_gender', 40)->nullable();
            $table->string('spouse_status', 40)->nullable();
            $table->string('company_entry_date', 40)->nullable();
            $table->string('company_withdrawal_date', 40)->nullable();
            $table->string('base_income_contribution', 40)->nullable();
            $table->string('allowance_value', 40)->nullable();
            $table->string('additional_allowance_value', 40)->nullable();
            $table->string('health_contribution', 40)->nullable();
            $table->string('extralegal_premium_amount', 40)->nullable();
            $table->string('number_months_year', 40)->nullable();
            $table->string('counter_rpm', 40)->nullable();
            $table->string('months_to_quote', 40)->nullable();
            $table->string('funeral_aid', 40)->nullable();
            $table->string('additional_weeks', 40)->nullable();
            $table->string('allowance_iss', 40)->nullable();
            $table->string('allowance_14', 40)->nullable();
            $table->string('school_help', 40)->nullable();
            $table->string('pension_requirement_date', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studies');
    }
};
