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
        Schema::create('bonus_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('entity')->nullable();
            $table->string('id_type')->nullable();
            $table->string('id_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('full_name')->nullable();
            $table->date('birthdate')->nullable();
            $table->float('base_salary', 15,2)->nullable();
            $table->date('entry_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->float('liquidated_days')->nullable();
            // $table->float('sb')->nullable();
            // $table->date('fb')->nullable();
            // $table->date('fc')->nullable();
            // $table->float('age_fc')->nullable();
            // $table->float('fr1')->nullable();
            // $table->float('fr2')->nullable();
            // $table->float('fr3')->nullable();
            // $table->float('reference_age')->nullable();
            // $table->float('int')->nullable();
            // $table->double('t', 15,10)->nullable();
            // $table->double('time_company_fc', 15,10)->nullable();
            // $table->double('t1', 15,10)->nullable();
            // $table->float('n')->nullable();
            // $table->float('n_plus_t')->nullable();
            // $table->double('smn', 15,5)->nullable();
            // $table->double('f1', 15,5)->nullable();
            // $table->double('f2', 15,5)->nullable();
            // $table->double('f3', 15,5)->nullable();
            // $table->double('f', 15,5)->nullable();
            // $table->double('ipc_fb', 15,5)->nullable();
            // $table->double('ipc_fc', 15,5)->nullable();
            // $table->double('sr', 15,5)->nullable();
            // $table->float('reference_salary')->nullable();
            // $table->float('reference_pension')->nullable();
            // $table->float('funeral_aid')->nullable();
            // $table->double('fac1', 15,6)->nullable();
            // $table->double('fac1_aj', 15,6)->nullable();
            // $table->double('fac2_aj', 15,6)->nullable();
            // $table->double('fac3', 15,10)->nullable();
            // $table->date('redemption date')->nullable();
            // $table->float('company participation')->nullable();
            // $table->float('BASIC_BONUS_CUT-OFF_DATE.')->nullable();
            // $table->float('COURT_DATE_FEE.')->nullable();
            // $table->float('BONUS_CALCULATION DATE.')->nullable();
            // $table->float('COMPANY_FEE_AT_THE_DATE_OF_CALCULATION.')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bonus_a_s');
    }
};
