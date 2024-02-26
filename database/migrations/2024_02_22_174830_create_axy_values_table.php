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
        Schema::create('axy_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('axy_name_id');
            $table->string('age');
            $table->string('axy_15', 50);
            $table->string('axy_16', 50);
            $table->string('axy_17', 50);
            $table->string('axy_18', 50);
            $table->string('axy_19', 50);
            $table->string('axy_20', 50);
            $table->string('axy_21', 50);
            $table->string('axy_22', 50);
            $table->string('axy_23', 50);
            $table->string('axy_24', 50);
            $table->string('axy_25', 50);
            $table->string('axy_26', 50);
            $table->string('axy_27', 50);
            $table->string('axy_28', 50);
            $table->string('axy_29', 50);
            $table->string('axy_30', 50);
            $table->string('axy_31', 50);
            $table->string('axy_32', 50);
            $table->string('axy_33', 50);
            $table->string('axy_34', 50);
            $table->string('axy_35', 50);
            $table->string('axy_36', 50);
            $table->string('axy_37', 50);
            $table->string('axy_38', 50);
            $table->string('axy_39', 50);
            $table->string('axy_40', 50);
            $table->string('axy_41', 50);
            $table->string('axy_42', 50);
            $table->string('axy_43', 50);
            $table->string('axy_44', 50);
            $table->string('axy_45', 50);
            $table->string('axy_46', 50);
            $table->string('axy_47', 50);
            $table->string('axy_48', 50);
            $table->string('axy_49', 50);
            $table->string('axy_50', 50);
            $table->string('axy_51', 50);
            $table->string('axy_52', 50);
            $table->string('axy_53', 50);
            $table->string('axy_54', 50);
            $table->string('axy_55', 50);
            $table->string('axy_56', 50);
            $table->string('axy_57', 50);
            $table->string('axy_58', 50);
            $table->string('axy_59', 50);
            $table->string('axy_60', 50);
            $table->string('axy_61', 50);
            $table->string('axy_62', 50);
            $table->string('axy_63', 50);
            $table->string('axy_64', 50);
            $table->string('axy_65', 50);
            $table->string('axy_66', 50);
            $table->string('axy_67', 50);
            $table->string('axy_68', 50);
            $table->string('axy_69', 50);
            $table->string('axy_70', 50);
            $table->string('axy_71', 50);
            $table->string('axy_72', 50);
            $table->string('axy_73', 50);
            $table->string('axy_74', 50);
            $table->string('axy_75', 50);
            $table->string('axy_76', 50);
            $table->string('axy_77', 50);
            $table->string('axy_78', 50);
            $table->string('axy_79', 50);
            $table->string('axy_80', 50);
            $table->string('axy_81', 50);
            $table->string('axy_82', 50);
            $table->string('axy_83', 50);
            $table->string('axy_84', 50);
            $table->string('axy_85', 50);
            $table->string('axy_86', 50);
            $table->string('axy_87', 50);
            $table->string('axy_88', 50);
            $table->string('axy_89', 50);
            $table->string('axy_90', 50);
            $table->string('axy_91', 50);
            $table->string('axy_92', 50);
            $table->string('axy_93', 50);
            $table->string('axy_94', 50);
            $table->string('axy_95', 50);
            $table->string('axy_96', 50);
            $table->string('axy_97', 50);
            $table->string('axy_98', 50);
            $table->string('axy_99', 50);
            $table->string('axy_100', 50);
            $table->string('axy_101', 50);
            $table->string('axy_102', 50);
            $table->string('axy_103', 50);
            $table->string('axy_104', 50);
            $table->string('axy_105', 50);
            $table->string('axy_106', 50);
            $table->string('axy_107', 50);
            $table->string('axy_108', 50);
            $table->string('axy_109', 50);
            $table->string('axy_110', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('axy_values');
    }
};
