<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class DataGeneral extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'year',
        'parametros_17',
        'smmlv',
        'k',
        'j',
        'js',
        'jm',
        'i',
        'ttm',
        'fecha_calculo',
    ];

    /**
     * Get the user that owns the DataGeneral
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Assign the authenticated user's ID to the `user_id` field
            $model->user_id = Auth::id();
        });
    }
}
