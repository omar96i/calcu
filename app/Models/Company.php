<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'business_name',
        'nit',
        'address',
        'phone',
        'type',
    ];

    /**
     * Get all of the company_estudies for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function company_estudies(): HasMany
    {
        return $this->hasMany(CompanyStudy::class);
    }
}
