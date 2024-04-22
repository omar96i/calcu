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
        Schema::create('table_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('table_id')->constrained();
            $table->foreignId('interest_rate_id')->constrained(); //tasa de interes
            $table->enum('gender', ['M', 'F']);
            $table->float('s', 12,2); //x
            $table->float('ls', 12,2); //lx
            $table->float('ds', 12,2 )->nullable(); //dx
            $table->float('qs', 12,5 )->nullable(); //qx
            $table->float('ps', 12,5 )->nullable(); //px
            $table->float('empty', 12,2 )->nullable(); //empty
            $table->float('es', 12,2 )->nullable(); //ex
            $table->float('mus', 12,5 )->nullable(); //μx
            
            $table->float('ds_', 12,3 )->nullable(); // DX
            $table->float('cs', 12,4 )->nullable(); // Cx
            $table->float('ns', 12,2 )->nullable(); // Nx 
            $table->float('ms', 12,4 )->nullable(); // Mx 
            $table->float('as', 12,4 )->nullable(); // ax 
            $table->float('as_', 12,4 )->nullable(); // ax 
            $table->float('as12', 12,4 )->nullable(); // ax(12) 
            $table->float('as2', 12,4 )->nullable(); // ax(2) 
            $table->float('as12_', 12,4 )->nullable(); // ax(12)
            $table->float('as2_', 12,2 )->nullable(); // axlSS 
            $table->float('p0', 12,4 )->nullable(); // "P0" 
            $table->float('p1', 12,4 )->nullable(); // "P1" 
            $table->float('as__', 12,4 )->nullable(); // Ax
            $table->float('empty_', 12,4 )->nullable(); // Ax
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_values');
    }
};
