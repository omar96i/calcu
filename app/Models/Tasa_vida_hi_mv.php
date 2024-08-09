<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasa_vida_hi_mv extends Model
{
    use HasFactory;

    protected $fillable = [
        'tasa_vida_hi_a',
        'tasa_vida_hi_b',
        'tasa_vida_hi_c',
    ];    
}
