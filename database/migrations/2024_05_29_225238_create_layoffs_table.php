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
        Schema::create('layoffs', function (Blueprint $table) {
            $table->id();
            $table->string("cc")->nullable();
            $table->string("full_name")->nullable();
            $table->string("sex")->nullable();
            $table->string("date_birth")->nullable();
            $table->string("date_entry")->nullable();
            $table->string("suspension")->nullable();
            $table->string("import_salary")->nullable();
            $table->string("advance")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layoffs');
    }
};
