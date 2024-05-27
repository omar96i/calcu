<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitleSalary extends Model
{
    use HasFactory;

    protected $fillable = [
        'year', // A
        'amount', // B
        'increment', // C
        'ipc', // D
        'accummulated', // F
        'dtfp', // E
        'accumulated_2', // G
    ];
}
