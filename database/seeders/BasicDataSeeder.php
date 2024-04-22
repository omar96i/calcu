<?php

namespace Database\Seeders;

use App\Models\BasicData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BasicDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BasicData::create([
            'calculation_year' => 2023,
            'calculation_date' => '2023-12-31',
            'salary' => 1160000,
            'admon_expenses' => 0,
            'k' => 4,
            'estimated_inflation_rate' => 3,
            'estimated_annual_inflation_rate' => 11.064,
            'monthly_estimated_inflation_rate' => 0.878,
            'semiannual_estimated_inflation_rate' => 5.387,
            'annual_technical_rate' => 6.793,
            'monthly_technical_rate' => 0.55,
            'semiannual_technical_rate' => 3.34,
            'age_difference' => 5,
            'safety_factor' => 0,
            'legislative_act' => '2011-07-25',
            'days_year' => 365.25,
        ]);
    }
}
