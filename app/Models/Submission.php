<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Submission extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'submission';

    public function assignment() : HasOne
    {
        return $this->hasOne(Assignment::class, 'id', 'assignment_id');
    }

    public function student() : HasOne
    {
        return $this->hasOne(User::class,'id', 'user_id');
    }

    
    public function submissions() : HasMany
    {
        return $this->hasMany(User::class,'id', 'assignment_id');
    }


    public function course ():HasOne{

        return $this->hasOne(Course::class, 'id', 'user_id');
    }
    
}

