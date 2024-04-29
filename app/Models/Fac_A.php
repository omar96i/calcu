<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fac_A extends Model
{
    use HasFactory;

    protected $fillable = [
        'age',
        'man_fac_1',
        'woman_fac_1',
        'man_fac_2',
        'woman_fac_2',
    ];
}
