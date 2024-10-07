<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class DataGeneral extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'type_company',
        'year',
        'parametros_17',
        'smmlv',
        'k',
        'j',
        'js',
        'jm',
        'i',
        'ttm',
        'fecha_calculo',
    ];
}
