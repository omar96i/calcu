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
        Schema::table('axy_invs', function (Blueprint $table) {
            $table->string('axy_inv_dh')->nullable()->after('axy_inv_dg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('axy_inv', function (Blueprint $table) {
            //
        });
    }
};
