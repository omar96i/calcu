<?php

namespace Database\Seeders;

use App\Models\InterestRate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InterestRate::create([
            'k' => 0.04,
            'i' => 0.0679273619115481,
            'plus' => 1.005494,
            'km' =>   1.003274,
            'im' =>   1.008783,
            'man_age_diferent' => 5,
            'woman_age_diferent' => -5,
            'sum_i' => 1.110644 ,
            'id_' =>   0.936393 ,
        ]);
    }
}
