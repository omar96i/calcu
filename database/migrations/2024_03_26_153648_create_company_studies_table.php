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
        Schema::create('company_studies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('actuarial_group_id')->constrained()->nullable();
            $table->string('cc')->nullable();
            $table->string('full_name')->nullable();
            $table->string('sex')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('causing_state')->nullable();
            $table->string('date_of_birth_spouse')->nullable();
            $table->string('spouse_gender')->nullable();
            $table->string('spouse_status')->nullable();
            $table->string('company_entry_date')->nullable();
            $table->string('company_withdrawal_date')->nullable();
            $table->string('income_base_quotation')->nullable();
            $table->string('allowance_value')->nullable();
            $table->string('allowance_14')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_studies');
    }
};
