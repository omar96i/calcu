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
        Schema::create('title_calculations', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('type_cc')->nullable();
            $table->string('cc')->nullable();
            $table->string('full_name')->nullable();
            $table->string('date_birth')->nullable();
            $table->string('sex')->nullable();
            $table->string('salary')->nullable();
            $table->string('date_court')->nullable();
            $table->string('date_link')->nullable();
            $table->string('quoted_time')->nullable();
            $table->string('at')->nullable();
            $table->string('to')->nullable();
            $table->string('dnr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('title_calculations');
    }
};
