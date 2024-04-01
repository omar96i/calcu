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
        Schema::table('company_studies', function (Blueprint $table) {
            $table->string('pension_situation')->default('3');
            $table->string('pension_class')->default(random_int(1, 5));

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_studies', function (Blueprint $table) {
            $table->dropColumn('pension_situation');
            $table->dropColumn('pension_class');
        });
    }
};
