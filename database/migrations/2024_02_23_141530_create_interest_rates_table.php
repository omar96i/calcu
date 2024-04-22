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
        Schema::create('interest_rates', function (Blueprint $table) {
            $table->id();
            $table->float('k', 8,6); //K =
            $table->double('i', 17, 16)->notnull(); //i =
            $table->float('plus', 8,6); //+ =
            $table->float('km', 8,6); //Km =
            $table->float('im', 8,6); //Im =
            $table->tinyInteger('man_age_diferent'); // Diferencia edad
            $table->tinyInteger('woman_age_diferent'); // Diferencia edad
            $table->float('sum_i', 8,6); //I =
            $table->float('id_', 8,6); //Id =
            $table->timestamps(); //K =
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interest_rates');
    }
};
