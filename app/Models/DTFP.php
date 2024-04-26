<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTFP extends Model
{
    use HasFactory;

    protected $fillable = [
       'date',
       'ipc',
       'accumulated',
       'dtfp_3',
       'dtfp_4',
    ];
}
