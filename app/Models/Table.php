<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Table extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    protected $fillable = [
        'name',
    ];

    /**
     * Get all of the table_values for the Table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function table_values(): HasMany
    {
        return $this->hasMany(TableValues::class);
    }
}
