<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'moqa',
                'last_name' => 'user',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );
        Job::factory(50)->create();
    }
}
