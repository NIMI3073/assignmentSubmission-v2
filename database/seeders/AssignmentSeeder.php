<?php

namespace Database\Seeders;

use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::first();
        Assignment::insert([
            [
                'course_id' => $course->id,
                'question' => 'what is computer',
                'total_score' => '30',
            ],
            [
                'course_id' => $course->id,
                'question' => 'what is programming',
                'total_score' => '20',
            ],
        ]);
    }
}
