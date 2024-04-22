<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TableValues extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'table_id',
        'interest_rate_id',
        'gender',
        's',
        'ls',
        'ds',
        'qs',
        'ps',
        'empty',
        'es',
        'mus',
        'ds_',
        'cs',
        'ns',
        'ms',
        'as',
        'as_',
        'as12',
        'as2',
        'as12_',
        'as2_',
        'p0',
        'p1',
        'as__',
        'empty_',
    ];

    /**
     * Get the table that owns the TableValues
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function table(): BelongsTo
    {
        return $this->belongsTo(Table::class);
    }
}
