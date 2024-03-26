<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActuarialGroup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'name',
    ];

    /**
     * Get all of the studies for the ActuarialGroup
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studies(): HasMany
    {
        return $this->hasMany(Study::class);
    }

    /**
     * Get all of the company_studies for the ActuarialGroup
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function company_studies(): HasMany
    {
        return $this->hasMany(CompanyStudy::class);
    }
}
