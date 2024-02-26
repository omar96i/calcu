<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AxyValue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'axy_name_id',
        'age',
        'axy_15',
        'axy_16',
        'axy_17',
        'axy_18',
        'axy_19',
        'axy_20',
        'axy_21',
        'axy_22',
        'axy_23',
        'axy_24',
        'axy_25',
        'axy_26',
        'axy_27',
        'axy_28',
        'axy_29',
        'axy_30',
        'axy_31',
        'axy_32',
        'axy_33',
        'axy_34',
        'axy_35',
        'axy_36',
        'axy_37',
        'axy_38',
        'axy_39',
        'axy_40',
        'axy_41',
        'axy_42',
        'axy_43',
        'axy_44',
        'axy_45',
        'axy_46',
        'axy_47',
        'axy_48',
        'axy_49',
        'axy_50',
        'axy_51',
        'axy_52',
        'axy_53',
        'axy_54',
        'axy_55',
        'axy_56',
        'axy_57',
        'axy_58',
        'axy_59',
        'axy_60',
        'axy_61',
        'axy_62',
        'axy_63',
        'axy_64',
        'axy_65',
        'axy_66',
        'axy_67',
        'axy_68',
        'axy_69',
        'axy_70',
        'axy_71',
        'axy_72',
        'axy_73',
        'axy_74',
        'axy_75',
        'axy_76',
        'axy_77',
        'axy_78',
        'axy_79',
        'axy_80',
        'axy_81',
        'axy_82',
        'axy_83',
        'axy_84',
        'axy_85',
        'axy_86',
        'axy_87',
        'axy_88',
        'axy_89',
        'axy_90',
        'axy_91',
        'axy_92',
        'axy_93',
        'axy_94',
        'axy_95',
        'axy_96',
        'axy_97',
        'axy_98',
        'axy_99',
        'axy_100',
        'axy_101',
        'axy_102',
        'axy_103',
        'axy_104',
        'axy_105',
        'axy_106',
        'axy_107',
        'axy_108',
        'axy_109',
        'axy_110',
    ];

    /**
     * Get the axy_names that owns the AxyValue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function axy_name(): BelongsTo
    {
        return $this->belongsTo(AxyName::class);
    }
}
