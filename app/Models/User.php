<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
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
    ];

    public function submissions() : HasMany
    {
        return $this->hasMany(Submission::class, 'user_id', 'id');
    }

    public function courses() : HasMany
    {
        return $this->hasMany(Course::class, 'user_id', 'id');
    }

    public function submission() : HasMany
    {
       return $this->hasMany(Submission::class, 'id', 'assignment_id');
    }

    public function students() : HasMany
    {
        return $this->hasMany(User::class,'id', 'user_id');
    }
}
