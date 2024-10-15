<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyParametro extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'ipc_anual',
    ];
}
