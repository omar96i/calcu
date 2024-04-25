<?php

namespace Database\Seeders;

use App\Models\Fac_A;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['age' => 45, 'man_fac_1' => 292.902660 , 'woman_fac_1' => 274.306470 , 'man_fac_2' => 0.405658 , 'woman_fac_2' => 0.387976 ],
            ['age' => 46, 'man_fac_1' => 289.363306 , 'woman_fac_1' => 270.314638 , 'man_fac_2' => 0.416089 , 'woman_fac_2' => 0.397905 ],
            ['age' => 47, 'man_fac_1' => 285.734466 , 'woman_fac_1' => 266.230585 , 'man_fac_2' => 0.426699 , 'woman_fac_2' => 0.408021 ],
            ['age' => 48, 'man_fac_1' => 282.015894 , 'woman_fac_1' => 262.054586 , 'man_fac_2' => 0.437474 , 'woman_fac_2' => 0.418322 ],
            ['age' => 49, 'man_fac_1' => 278.206428 , 'woman_fac_1' => 257.786433 , 'man_fac_2' => 0.448415 , 'woman_fac_2' => 0.428811 ],
            ['age' => 50, 'man_fac_1' => 274.306470 , 'woman_fac_1' => 253.425311 , 'man_fac_2' => 0.459510 , 'woman_fac_2' => 0.439506 ],
            ['age' => 51, 'man_fac_1' => 270.314638 , 'woman_fac_1' => 248.972059 , 'man_fac_2' => 0.470754 , 'woman_fac_2' => 0.450399 ],
            ['age' => 52, 'man_fac_1' => 266.230585 , 'woman_fac_1' => 244.428700 , 'man_fac_2' => 0.482131 , 'woman_fac_2' => 0.461486 ],
            ['age' => 53, 'man_fac_1' => 262.054586 , 'woman_fac_1' => 239.799200 , 'man_fac_2' => 0.493627 , 'woman_fac_2' => 0.472732 ],
            ['age' => 54, 'man_fac_1' => 257.786433 , 'woman_fac_1' => 235.085701 , 'man_fac_2' => 0.505227 , 'woman_fac_2' => 0.484141 ],
            ['age' => 55, 'man_fac_1' => 253.425311 , 'woman_fac_1' => 230.292048 , 'man_fac_2' => 0.516908 , 'woman_fac_2' => 0.495685 ],
            ['age' => 56, 'man_fac_1' => 248.972059 , 'woman_fac_1' => 225.421825 , 'man_fac_2' => 0.528662 , 'woman_fac_2' => 0.507356 ],
            ['age' => 57, 'man_fac_1' => 244.428700 , 'woman_fac_1' => 220.477770 , 'man_fac_2' => 0.540461 , 'woman_fac_2' => 0.519147 ],
            ['age' => 58, 'man_fac_1' => 239.799200 , 'woman_fac_1' => 215.460655 , 'man_fac_2' => 0.552303 , 'woman_fac_2' => 0.531066 ],
            ['age' => 59, 'man_fac_1' => 235.085701 , 'woman_fac_1' => 210.372673 , 'man_fac_2' => 0.564157 , 'woman_fac_2' => 0.543118 ],
            ['age' => 60, 'man_fac_1' => 230.292048 , 'woman_fac_1' => 205.217983 , 'man_fac_2' => 0.576020 , 'woman_fac_2' => 0.555290 ],
            ['age' => 61, 'man_fac_1' => 225.421825 , 'woman_fac_1' => 199.998605 , 'man_fac_2' => 0.587864 , 'woman_fac_2' => 0.567590 ],
            ['age' => 62, 'man_fac_1' => 220.477770 , 'woman_fac_1' => 194.725103 , 'man_fac_2' => 0.599682 , 'woman_fac_2' => 0.579965 ],
            ['age' => 63, 'man_fac_1' => 215.460655 , 'woman_fac_1' => 189.409012 , 'man_fac_2' => 0.611469 , 'woman_fac_2' => 0.592359 ],
            ['age' => 64, 'man_fac_1' => 210.372673 , 'woman_fac_1' => 184.063215 , 'man_fac_2' => 0.623210 , 'woman_fac_2' => 0.604708 ],
            ['age' => 65, 'man_fac_1' => 205.217983 , 'woman_fac_1' => 178.699332 , 'man_fac_2' => 0.634894 , 'woman_fac_2' => 0.616965 ],
            ['age' => 66, 'man_fac_1' => 199.998605 , 'woman_fac_1' => 173.331169 , 'man_fac_2' => 0.646516 , 'woman_fac_2' => 0.629072 ],
            ['age' => 67, 'man_fac_1' => 194.725103 , 'woman_fac_1' => 167.961786 , 'man_fac_2' => 0.658065 , 'woman_fac_2' => 0.641034 ],
            ['age' => 68, 'man_fac_1' => 189.409012 , 'woman_fac_1' => 162.595462 , 'man_fac_2' => 0.669534 , 'woman_fac_2' => 0.652863 ],
            ['age' => 69, 'man_fac_1' => 184.063215 , 'woman_fac_1' => 157.236743 , 'man_fac_2' => 0.680918 , 'woman_fac_2' => 0.664559 ],
            ['age' => 70, 'man_fac_1' => 178.699332 , 'woman_fac_1' => 151.891771 , 'man_fac_2' => 0.692206 , 'woman_fac_2' => 0.676128 ],
            ['age' => 71, 'man_fac_1' => 173.331169 , 'woman_fac_1' => 146.561040 , 'man_fac_2' => 0.703377 , 'woman_fac_2' => 0.687582 ],
            ['age' => 72, 'man_fac_1' => 167.961786 , 'woman_fac_1' => 141.246381 , 'man_fac_2' => 0.714431 , 'woman_fac_2' => 0.698943 ],
            ['age' => 73, 'man_fac_1' => 162.595462 , 'woman_fac_1' => 135.948647 , 'man_fac_2' => 0.725339 , 'woman_fac_2' => 0.710243 ],
            ['age' => 74, 'man_fac_1' => 157.236743 , 'woman_fac_1' => 130.666537 , 'man_fac_2' => 0.736093 , 'woman_fac_2' => 0.721522 ],
            ['age' => 75, 'man_fac_1' => 151.891771 , 'woman_fac_1' => 125.402759 , 'man_fac_2' => 0.746653 , 'woman_fac_2' => 0.732807 ],
            ['age' => 76, 'man_fac_1' => 146.561040 , 'woman_fac_1' => 120.234869 , 'man_fac_2' => 0.757035 , 'woman_fac_2' => 0.743705 ],
            ['age' => 77, 'man_fac_1' => 141.246381 , 'woman_fac_1' => 115.131856 , 'man_fac_2' => 0.767224 , 'woman_fac_2' => 0.754410 ],
            ['age' => 78, 'man_fac_1' => 135.948647 , 'woman_fac_1' => 110.100144 , 'man_fac_2' => 0.777195 , 'woman_fac_2' => 0.764915 ],
            ['age' => 79, 'man_fac_1' => 130.666537, 'woman_fac_1' => 105.149919, 'man_fac_2' => 0.786943, 'woman_fac_2' => 0.775201],
            ['age' => 80, 'man_fac_1' => 125.402759 , 'woman_fac_1' => 100.288196 , 'man_fac_2' => 0.796457 , 'woman_fac_2' => 0.785258 ],
            ['age' => 81, 'man_fac_1' => 120.234869, 'woman_fac_1' => 95.521571, 'man_fac_2' => 0.805726, 'woman_fac_2' => 0.795074],
            ['age' => 82, 'man_fac_1' => 115.131856 , 'woman_fac_1' => 90.859047 , 'man_fac_2' => 0.814737 , 'woman_fac_2' => 0.804635 ],
        ];
        
        foreach ($data as $record) {
            Fac_A::create($record);
        }
        
    }
}
