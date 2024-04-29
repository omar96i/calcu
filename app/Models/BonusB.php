<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];
}
