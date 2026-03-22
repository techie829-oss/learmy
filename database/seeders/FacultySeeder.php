<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Faculty::create([
            'name' => 'Dr. Arnab Kumar',
            'designation' => 'Head of Academics',
            'specialization' => 'Mathematics & Physics',
            'bio' => 'Over 15 years of experience in coaching students for competitive exams.',
        ]);

        \App\Models\Faculty::create([
            'name' => 'Ms. Sarah Jenkins',
            'designation' => 'Lead Music Instructor',
            'specialization' => 'Piano & Vocal Training',
            'bio' => 'Certified musician with a passion for teaching young talents.',
        ]);
    }
}
