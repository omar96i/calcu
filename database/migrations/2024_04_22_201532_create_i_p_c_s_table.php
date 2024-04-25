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
        Schema::create('i_p_c_s', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->float('ipc');
            $table->double('2023', 15,6)->nullable();	
            $table->double('2022', 15,6)->nullable();	
            $table->double('2021', 15,6)->nullable();	
            $table->double('2020', 15,6)->nullable();
            $table->double('2019', 15,6)->nullable();
            $table->double('2018', 15,6)->nullable();
            $table->double('2017', 15,6)->nullable();
            $table->double('2016', 15,6)->nullable();
            $table->double('2015', 15,6)->nullable();
            $table->double('2014', 15,6)->nullable();
            $table->double('2013', 15,6)->nullable();
            $table->double('2012', 15,6)->nullable();
            $table->double('2011', 15,6)->nullable();
            $table->double('2010', 15,6)->nullable();
            $table->double('2009', 15,6)->nullable();
            $table->double('2008', 15,6)->nullable();
            $table->double('2007', 15,6)->nullable();
            $table->double('2006', 15,6)->nullable();
            $table->double('2005', 15,6)->nullable();
            $table->double('2004', 15,6)->nullable();
            $table->double('2003', 15,6)->nullable();
            $table->double('2002', 15,6)->nullable();
            $table->double('2001', 15,6)->nullable();
            $table->double('2000', 15,6)->nullable();
            $table->double('1999', 15,6)->nullable();
            $table->double('1998', 15,6)->nullable();
            $table->double('1997', 15,6)->nullable();
            $table->double('1996', 15,6)->nullable();
            $table->double('1995', 15,6)->nullable();
            $table->double('1994', 15,6)->nullable();
            $table->double('1993', 15,6)->nullable();
            $table->double('1992', 15,6)->nullable();
            $table->double('1991', 15,6)->nullable();
            $table->double('1990', 15,6)->nullable();
            $table->double('1989', 15,6)->nullable();
            $table->double('1988', 15,6)->nullable();
            $table->double('1987', 15,6)->nullable();
            $table->double('1986', 15,6)->nullable();
            $table->double('1985', 15,6)->nullable();
            $table->double('1984', 15,6)->nullable();
            $table->double('1983', 15,6)->nullable();
            $table->double('1982', 15,6)->nullable();
            $table->double('1981', 15,6)->nullable();
            $table->double('1980', 15,6)->nullable();
            $table->double('1979', 15,6)->nullable();
            $table->double('1978', 15,6)->nullable();
            $table->double('1977', 15,6)->nullable();	
            $table->double('1976', 15,6)->nullable();	
            $table->double('1975', 15,6)->nullable();	
            $table->double('1974', 15,6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_p_c_s');
    }
};
