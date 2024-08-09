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
        Schema::table('axy_mi_mis', function (Blueprint $table) {
            $table->string('axy_mi_mi_dh', 50)->nullable()->after('axy_mi_mi_dg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('axy_mi_mi', function (Blueprint $table) {
            //
        });
    }
};
