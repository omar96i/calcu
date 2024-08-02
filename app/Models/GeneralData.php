<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralData extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'calculation_year',
        'calculation_date',
        'minimum_salary',
        'administration_expenses',
        'k_growth',
        'technical_rate',
        'expected_inflation_rate',
        'estimated_rate',
        'age_difference',
        'safety_factor',
        'annual_cpi',
    ];

    public function generaldata(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
