<?php

namespace Database\Seeders;

 
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => fake () -> name(),
            'email' => fake() -> unique() -> safeEmail(),
            'email_verified_at'=> now(),
            'password' => bcrypt('vel123')
        ]);
    }
}

