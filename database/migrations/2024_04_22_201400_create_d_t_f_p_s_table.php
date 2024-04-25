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
        Schema::create('d_t_f_p_s', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->float('ipc');
            $table->double('accumulated', 15,6);
            $table->double('dtfp_3', 15,6);
            $table->double('dtfp_4', 15,6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_t_f_p_s');
    }
};
