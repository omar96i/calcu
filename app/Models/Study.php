<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Study extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'actuarial_group_id',
        'cc',
        'name',
        'sex',
        'pension_class',
        'pension_situation',
        'civil_status',
        'birth_date',
        'causative_state',
        'date_of_birth_spouse',
        'spouse_gender',
        'spouse_gender',
        'company_entry_date',
        'company_withdrawal_date',
        'base_income_contribution',
        'allowance_value',
        'additional_allowance_value',
        'health_contribution',
        'extralegal_premium_amount',
        'number_months_year',
        'counter_rpm',
        'months_to_quote',
        'funeral_aid',
        'additional_weeks',
        'allowance_iss',
        'allowance_14',
        'school_help',
        'pension_requirement_date',
    ];


    /**
     * Get the actuarial_group that owns the Study
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function actuarial_group(): BelongsTo
    {
        return $this->belongsTo(ActuarialGroup::class);
    }
}
