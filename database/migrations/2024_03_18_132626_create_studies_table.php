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
            $table->foreignId('user_id')->constrained();
            $table->foreignId('actuarial_group_id')->constrained();
            $table->string('cc')->nullable();
            $table->string('name')->nullable();
            $table->string('sex')->nullable();
            $table->string('pension_class')->nullable();
            $table->string('pension_situation')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('causative_state')->nullable();
            $table->string('date_of_birth_spouse')->nullable();
            $table->string('spouse_gender')->nullable();
            $table->string('spouse_status')->nullable();
            $table->string('company_entry_date')->nullable();
            $table->string('company_withdrawal_date')->nullable();
            $table->string('base_income_contribution')->nullable();
            $table->string('allowance_value')->nullable();
            $table->string('additional_allowance_value')->nullable();
            $table->string('health_contribution')->nullable();
            $table->string('extralegal_premium_amount')->nullable();
            $table->string('number_months_year')->nullable();
            $table->string('counter_rpm')->nullable();
            $table->string('months_to_quote')->nullable();
            $table->string('funeral_aid')->nullable();
            $table->string('additional_weeks')->nullable();
            $table->string('allowance_iss')->nullable();
            $table->string('allowance_14')->nullable();
            $table->string('school_help')->nullable();
            $table->string('pension_requirement_date')->nullable();
            $table->date('date_format')->nullable();
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
