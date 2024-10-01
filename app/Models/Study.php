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
        'user_id',
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
        'spouse_status',
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
        'date_format',
        'studies_ad',
        'studies_ae',
        'studies_af',
        'studies_ag',
        'studies_ah',
        'studies_ai',
        'studies_aj',
        'studies_ak',
        'studies_al',
        'studies_am',
        'studies_an',
        'studies_ao',
        'studies_ap',
        'studies_aq',
        'studies_ar',
        'studies_as',
        'studies_at',
        'studies_au',
        'studies_av',
        'studies_aw',
        'studies_ax',
        'studies_ay',
        'studies_az',
        'studies_ba',
        'studies_bb',
        'studies_bc',
        'studies_bd',
        'studies_be',
        'studies_bf',
        'studies_bg',
        'studies_bh',
        'studies_bi',
        'studies_bj',
        'studies_bk',
        'studies_bl',
        'studies_bm',
        'studies_bn',
        'studies_bo',
        'studies_bp',
        'studies_bq',
        'studies_br',
        'studies_bs',
        'studies_bt',
        'studies_bu',
        'studies_bv',
        'studies_bw',
        'studies_bx',
        'studies_by',
        'studies_bz',
        'studies_baz',
        'studies_cg',
        'year',
        'report_type'
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
