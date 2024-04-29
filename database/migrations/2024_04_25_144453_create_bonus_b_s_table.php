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
        Schema::create('bonus_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('entity')->nullable();
            $table->string('id_type')->nullable();
            $table->string('id_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('full_name')->nullable();
            $table->date('birthdate')->nullable();
            $table->float('base_salary', 15,2)->nullable();
            $table->date('entry_date')->nullable();
            $table->date('out_date')->nullable();
            $table->integer('days_leaves')->nullable();
            $table->string('interims')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bonus_b_s');
    }
};
