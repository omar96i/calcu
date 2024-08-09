<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mortalityrate extends Model
{
    use HasFactory;

    protected $fillable = [
        'mortalityrate_a',
        'mortalityrate_b',
        'mortalityrate_c',
    ]; 
}
