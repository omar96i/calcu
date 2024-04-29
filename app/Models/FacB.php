<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacB extends Model
{
    use HasFactory;

    protected $fillable = [
        'age',
        'm_fac_1',
        'm2_fac_1',
        'f_fac_1',
        'f2_fac_1',
        'm_fac_2',
        'm2_fac_2',
        'f_fac_2',
        'f2_fac_2',
    ];
}
