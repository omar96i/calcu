<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicData extends Model
{
    use HasFactory;

    protected $fillable = [
        'calculation_year',
        'calculation_date',
        'salary',
        'admon_expenses',
        'k',
        'estimated_inflation_rate',
        'estimated_annual_inflation_rate',
        'monthly_estimated_inflation_rate',
        'semiannual_estimated_inflation_rate',
        'annual_technical_rate',
        'monthly_technical_rate',
        'semiannual_technical_rate',
        'age_difference',
        'safety_factor',
        'legislative_act',
        'days_year',
    ];
}
