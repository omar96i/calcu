<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabla_vida_invalidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'tabla_vida_a',
        'tabla_vida_b',
        'tabla_vida_c',
    ]; 
}
