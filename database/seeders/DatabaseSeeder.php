<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@learmy.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $this->call([
            CourseSeeder::class,
            FacultySeeder::class,
            TestimonialSeeder::class,
            BlogSeeder::class,
            EventSeeder::class,
        ]);
    }
}
