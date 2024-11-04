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
        Schema::table('title_calculations', function (Blueprint $table) {
            $table->foreignId('user_id')->default(1)->constrained();
            $table->string('year')->default('2023');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('title_calculations', function (Blueprint $table) {
            //
        });
    }
};
