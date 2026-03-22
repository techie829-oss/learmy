<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Blog::create([
            'title' => 'The Importance of Music in Child Development',
            'slug' => 'importance-of-music-child-development',
            'content' => 'Studies show that learning a musical instrument can boost brain power and emotional intelligence in children...',
            'author' => 'Admin',
        ]);

        \App\Models\Blog::create([
            'title' => 'Preparing for Board Exams: Tips & Tricks',
            'slug' => 'preparing-board-exams-tips',
            'content' => 'Board exams can be stressful. Here are some strategies to manage your time and study effectively...',
            'author' => 'Dr. Arnab Kumar',
        ]);
    }
}
