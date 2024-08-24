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
        Schema::table('layoffs', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('days_worked')->nullable();
            $table->string('calculation_base')->nullable();
            $table->string('days_calculation_base')->nullable();
            $table->string('regime')->nullable();
            $table->string('age_fc')->nullable();
            $table->string('severance_liquidation')->nullable();
            $table->string('accumulated_severances')->nullable();
            $table->string('retire_date')->nullable();
            $table->string('days')->nullable();
            $table->string('retire_year')->nullable();
            $table->string('age_fr')->nullable();
            $table->string('year_to_work')->nullable();
            $table->string('settlement_value')->nullable();
            $table->string('value_charge')->nullable();
            $table->string('liquidation_2023')->nullable();
            $table->string('liquidation_2024')->nullable();
            $table->string('liquidation_2025')->nullable();
            $table->string('liquidation_2026')->nullable();
            $table->string('liquidation_2027')->nullable();
            $table->string('liquidation_2028')->nullable();
            $table->string('liquidation_2029')->nullable();
            $table->string('liquidation_2030')->nullable();
            $table->string('liquidation_2031')->nullable();
            $table->string('liquidation_2032')->nullable();
            $table->string('liquidation_2033')->nullable();
            $table->string('liquidation_2034')->nullable();
            $table->string('liquidation_2035')->nullable();
            $table->string('liquidation_2036')->nullable();
            $table->string('liquidation_2037')->nullable();
            $table->string('liquidation_2038')->nullable();
            $table->string('liquidation_2039')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layoffs', function (Blueprint $table) {
            $table->dropColumn(['user_id']);
            $table->dropColumn('days_worked');
            $table->dropColumn('calculation_base');
            $table->dropColumn('days_calculation_base');
            $table->dropColumn('regime');
            $table->dropColumn('age_fc');
            $table->dropColumn('severance_liquidation');
            $table->dropColumn('accumulated_severances');
            $table->dropColumn('retire_date');
            $table->dropColumn('days');
            $table->dropColumn('retire_year');
            $table->dropColumn('age_fr');
            $table->dropColumn('year_to_work');
            $table->dropColumn('settlement_value');
            $table->dropColumn('value_charge');
            $table->dropColumn('liquidation_2023');
            $table->dropColumn('liquidation_2024');
            $table->dropColumn('liquidation_2025');
            $table->dropColumn('liquidation_2026');
            $table->dropColumn('liquidation_2027');
            $table->dropColumn('liquidation_2028');
            $table->dropColumn('liquidation_2029');
            $table->dropColumn('liquidation_2030');
            $table->dropColumn('liquidation_2031');
            $table->dropColumn('liquidation_2032');
            $table->dropColumn('liquidation_2033');
            $table->dropColumn('liquidation_2034');
            $table->dropColumn('liquidation_2035');
            $table->dropColumn('liquidation_2036');
            $table->dropColumn('liquidation_2037');
            $table->dropColumn('liquidation_2038');
            $table->dropColumn('liquidation_2039');
        });
    }
};
