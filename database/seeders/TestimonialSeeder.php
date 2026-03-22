<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Testimonial::create([
            'student_name' => 'Rahul Sharma',
            'parent_name' => 'Mr. Sharma',
            'program' => 'Mathematics Coaching',
            'feedback' => 'The teachers at Learmy are exceptional. My son showed significant improvement in his math grades within three months.',
            'rating' => 5,
        ]);

        \App\Models\Testimonial::create([
            'student_name' => 'Emily Chen',
            'program' => 'Piano Lessons',
            'feedback' => 'I love my piano classes here! Ms. Sarah is so patient and makes learning fun.',
            'rating' => 5,
        ]);
    }
}
