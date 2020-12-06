<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wish;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        
        User::factory()
            ->count(10)
            ->has(Wish::factory()->count(rand(1, 6)))
            ->create();
    }
}
