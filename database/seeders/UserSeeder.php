<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        [
            'full_name' => 'Alabi Yusuf',
            'email' => 'alabiyusuf@gmail.com',
            'phone' => '09076473562',
            'type' => 'lecturer',
            'password' => '$2y$10$5ZIXsYtEMHvcmMIi1grCcuG6Tvs2ddhdrrCz1oIbJzaY3wRdW4/AK',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'full_name' => 'Loveth Nwachukwu',
            'email' => 'loveth@gmail.com',
            'phone' => '09045097859',
            'type' => 'student',
            'password' => '$2y$10$5ZIXsYtEMHvcmMIi1grCcuG6Tvs2ddhdrrCz1oIbJzaY3wRdW4/AK',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'full_name' => 'Mosunmola Oreoluwa',
            'email' => 'mosunmore@gmail.com',
            'phone' => '090788979878',
            'type' => 'student',
            'password' => '$2y$10$5ZIXsYtEMHvcmMIi1grCcuG6Tvs2ddhdrrCz1oIbJzaY3wRdW4/AK',
            'created_at' => now(),
            'updated_at' => now()
        ],
        ]);
    }
}
