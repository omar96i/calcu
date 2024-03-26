<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'actuarial_group_id',
        'cc',
        'full_name',
        'sex',
        'civil_status',
        'birth_date',
        'causing_state',
        'date_of_birth_spouse',
        'spouse_gender',
        'spouse_status',
        'company_entry_date',
        'company_withdrawal_date',
        'income_base_quotation',
        'allowance_value',
        'allowance_14',
    ];

    /**
     * Get the company that owns the CompanyStudy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the actuarial_group that owns the CompanyStudy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function actuarial_group(): BelongsTo
    {
        return $this->belongsTo(ActuarialGroup::class);
    }
}
