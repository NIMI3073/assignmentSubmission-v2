<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;

     protected $guarded = [];

     protected $table = 'course';

     public function assignments() : HasMany
     {
         return $this->hasMany(Assignment::class,'course_id', 'id');
     }
     
     public function lecturer() : HasOne
     {
        return $this->hasOne(User::class, 'id', 'user_id');
     }
}
