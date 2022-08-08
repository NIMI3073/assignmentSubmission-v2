<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturer = User::where('type', 'lecturer')->first();
        if ($lecturer) {
            Course::insert([
                [
                    'user_id' => $lecturer->id,
                    'course_title' => 'Elementary Programming',
                    'course_code' => 'COM111',
                    'course_unit' => 4,
                    'course_id' => 'JXM6F',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'user_id' => $lecturer->id,
                    'course_title' => 'Elementary Science',
                    'course_code' => 'COM121',
                    'course_unit' => 4,
                    'course_id' => 'MXL0F',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]);
        }
    }
}
