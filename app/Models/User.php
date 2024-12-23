<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Spatie\Permission\Traits\HasRoles;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPanelShield;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nit',
        'phone',
        'address',
        'city',
        'type',
        'country',
        'national_legal_considerations',
        'international_legal_considerations',
        'liquidated',
        'user_id',
        'type_user',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get all of the users for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function parametros(): BelongsTo
    {
        return $this->belongsTo(GeneralData::class);
    }

    /**
     * Get all of the bonus_as for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bonus_a_s(): HasMany
    {
        return $this->hasMany(BonusA::class);
    }

    /**
     * Get all of the bonus_b_s for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bonus_b_s(): HasMany
    {
        return $this->hasMany(BonusB::class);
    }
}
