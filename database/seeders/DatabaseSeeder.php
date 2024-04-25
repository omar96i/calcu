<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BasicData;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '12345',
        ]);

        $this->call(BasicDataSeeder::class);
        $this->call(InterestRatesSeeder::class);
        $this->call(ActuarialGroupSeeder::class);
        $this->call(TableSeeder::class);
        $this->call(FacASeeder::class);
        $this->call(DTFPSeeder::class);
        $this->call(IPCSeeder::class);
        $this->call(NationalAvarageSalarySeeder::class);
    }
}
