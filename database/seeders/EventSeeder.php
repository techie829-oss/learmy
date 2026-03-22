<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Event::create([
            'title' => 'Annual Music Concert 2026',
            'slug' => 'annual-music-concert-2026',
            'description' => 'A grand showcase of our students musical talents.',
            'event_date' => now()->addMonths(1),
            'location' => 'Main Auditorium, Learmy Campus',
        ]);

        \App\Models\Event::create([
            'title' => 'Academic Excellence Workshop',
            'slug' => 'academic-excellence-workshop',
            'description' => 'Free workshop for students to learn new study techniques.',
            'event_date' => now()->addWeeks(2),
            'location' => 'Seminar Hall B',
        ]);
    }
}
