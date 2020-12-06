<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            (object) [
                'name' => 'Travis Swiers',
                'email' => 'tswiers85@gmail.com',
            ],
            (object) [
                'name' => 'John Osburn',
                'email' => 'josburn@idk.com',
            ],
            (object) [
                'name' => 'Emily Osburn',
                'email' => 'eosburn@idk.com',
            ],
            (object) [
                'name' => 'Harper Osburn',
                'email' => 'hosburn@idk.com',
            ],
            (object) [
                'name' => 'Phin Osburn',
                'email' => 'posburn@idk.com',
            ],
            (object) [
                'name' => 'Evan Osburn',
                'email' => 'evosburn@idk.com',
            ]
        ];

        foreach ($users as $user) {
            User::factory()->create([
                'name' => $user->name,
                'email' => $user->email,
            ]);
        }
    }
}
