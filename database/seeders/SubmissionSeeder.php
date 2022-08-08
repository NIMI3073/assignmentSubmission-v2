<?php

namespace Database\Seeders;

use App\Models\Submission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Submission::insert([
            [
                'user_id' => 2,
                'assignment_id' => 1,
                'answer' =>'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
                'score_obtained' => 0
            ],
            [
                'user_id' => 3,
                'assignment_id' => 1,
                'answer' =>'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
                'score_obtained' => 0
            ]
            ]);
    }
}
