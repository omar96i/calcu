<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiveYearCalculation extends Model
{
    use HasFactory;

    protected $fillable = [
        'cc',
        'full_name',
        'birth_date',
        'sec',
        'basic_salary',
        'named_date',
        'licence',
        '5_year',
        '10_year',
        '15_year',
        'coment',
    ];
}
