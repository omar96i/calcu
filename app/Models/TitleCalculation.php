<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitleCalculation extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'type_cc',
        'cc',
        'full_name',
        'date_birth',
        'sex',
        'salary',
        'date_court',
        'date_link',
        'quoted_time',
        'at',
        'to',
        'dnr',
        'user_id',
        'year'
    ];
}
