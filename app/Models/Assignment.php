<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Assignment extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $table = 'assignment';

    protected $with = ['course'];

    public function course() : HasOne
    {
        return $this->hasOne(Course::class,'id', 'course_id');
    }


    public function submissions():HasMany
    {
        return $this->hasMany(Submission::class, 'assignment_id', 'id');
    }

    
    public function studentSubmissions() : HasOne
    {
        return $this->hasOne(User::class,'id', 'user_id');
    }
    

    public function lecturerAssignments() : HasOne
    {
        return $this->hasOne(User::class,'id', 'user_id');
    }

    
}
