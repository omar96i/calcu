<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layoff extends Model
{
    use HasFactory;

    protected $fillable = [
        'cc',
        'full_name',
        'sex',
        'date_birth',
        'date_entry',
        'suspension',
        'import_salary',
        'advance',
    ];
}
