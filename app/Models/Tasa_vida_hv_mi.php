<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasa_vida_hv_mi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tasa_vida_hi_mi_a',
        'tasa_vida_hi_mi_b',
        'tasa_vida_hi_mi_c',
    ]; 
}
