<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AxyName extends Model
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
     * Get all of the axy_values for the AxyName
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function axy_values(): HasMany
    {
        return $this->hasMany(AxyValue::class);
    }
}
