<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BonusA extends Model
{
    use HasFactory;

    protected $fillable = [
        'entity',
        'id_type',
        'id_number',
        'gender',
        'full_name',
        'birthdate',
        'base_salary',
        'entry_date',
        'departure_date',
        'liquidated_days',
        'user_id',
        'bonus_a_l',
        'bonus_a_m',
        'bonus_a_n',
        'bonus_a_o',
        'bonus_a_p',
        'bonus_a_q',
        'bonus_a_r',
        'bonus_a_s',
        'bonus_a_t',
        'bonus_a_u',
        'bonus_a_v',
        'bonus_a_w',
        'bonus_a_x',
        'bonus_a_y',
        'bonus_a_z',
        'bonus_a_aa',
        'bonus_a_ab',
        'bonus_a_ac',
        'bonus_a_ad',
        'bonus_a_ae',
        'bonus_a_af',
        'bonus_a_ag',
        'bonus_a_ah',
        'bonus_a_ai',
        'bonus_a_aj',
        'bonus_a_ak',
        'bonus_a_al',
        'bonus_a_am',
        'bonus_a_an',
        'bonus_a_ao',
        'bonus_a_ap',
        'bonus_a_aq',
        'bonus_a_ar',
        'bonus_a_as',
        'bonus_a_at',
        'bonus_a_au',
        'bonus_a_av',
        'bonus_a_aw',
        'year'
    ];

    /**
     * Get the user that owns the BonusA
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
