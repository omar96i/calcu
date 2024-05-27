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
        Schema::create('title_salaries', function (Blueprint $table) {
            $table->id();
            $table->string('year')->nullable();
            $table->string('amount')->nullable();
            $table->string('increment')->nullable();
            $table->string('ipc')->nullable();
            $table->string('accummulated')->nullable();
            $table->string('dtfp')->nullable();
            $table->string('accumulated_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('title_salaries');
    }
};
