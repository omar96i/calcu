<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BonusB extends Model
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
        'out_date',
        'days_leaves',
        'interims',
        'user_id',
        'bonus_b_m',
        'bonus_b_n',
        'bonus_b_o',
        'bonus_b_p',
        'bonus_b_q',
        'bonus_b_r',
        'bonus_b_s',
        'bonus_b_t',
        'bonus_b_v',
        'bonus_b_w',
        'bonus_b_x',
        'bonus_b_y',
        'bonus_b_z',
        'bonus_b_aa',
        'bonus_b_ab',
        'bonus_b_ac',
        'bonus_b_ad',
        'bonus_b_af',
        'bonus_b_ag',
        'bonus_b_ah',
        'bonus_b_ai',
        'bonus_b_aj',
        'bonus_b_ak',
        'bonus_b_al',
        'bonus_b_am',
        'bonus_b_an',
        'bonus_b_ao',
        'bonus_b_ap',
        'bonus_b_aq',
        'bonus_b_ar',
        'bonus_b_as',
        'bonus_b_at',
        'bonus_b_av',
        'bonus_b_aw',
        'bonus_b_ax',
        'year'
    ];

    /**
     * Get the user that owns the BonusB
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
