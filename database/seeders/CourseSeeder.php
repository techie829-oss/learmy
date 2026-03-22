<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Course::create([
            'title' => 'Piano Mastery',
            'slug' => 'piano-mastery',
            'category' => 'music',
            'description' => 'Comprehensive piano lessons for beginners to advanced students.',
            'features' => "Classical Training\nJazz Improv\nTheory Workshops",
            'is_featured' => true,
        ]);

        \App\Models\Course::create([
            'title' => 'Advanced Mathematics',
            'slug' => 'advanced-mathematics',
            'category' => 'academic',
            'description' => 'In-depth coaching for high school and competitive level math.',
            'features' => "Calculus Focus\nProblem Solving Sets\nMock Exams",
            'is_featured' => true,
        ]);

        \App\Models\Course::create([
            'title' => 'Guitar Essentials',
            'slug' => 'guitar-essentials',
            'category' => 'music',
            'description' => 'Learn acoustic and electric guitar from the basics.',
            'features' => "Chord Progressions\nStrumming Patterns\nSolo Techniques",
            'is_featured' => false,
        ]);
    }
}
