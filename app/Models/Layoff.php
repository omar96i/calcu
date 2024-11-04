<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layoff extends Model
{
    use HasFactory;

    protected $fillable = [
        'cc',
        'full_name',
        'sex',
        'date_birth',
        'date_entry',
        'suspension',
        'import_salary',
        'advance',
        'user_id',
        'days_worked',
        'calculation_base',
        'days_calculation_base',
        'regime',
        'age_fc',
        'severance_liquidation',
        'accumulated_severances',
        'retire_date',
        'days',
        'retire_year',
        'age_fr',
        'year_to_work',
        'settlement_value',
        'value_charge',
        'liquidation_2023',
        'liquidation_2024',
        'liquidation_2025',
        'liquidation_2026',
        'liquidation_2027',
        'liquidation_2028',
        'liquidation_2029',
        'liquidation_2030',
        'liquidation_2031',
        'liquidation_2032',
        'liquidation_2033',
        'liquidation_2034',
        'liquidation_2035',
        'liquidation_2036',
        'liquidation_2037',
        'liquidation_2038',
        'liquidation_2039',
        'status',
        'year'
    ];
}
