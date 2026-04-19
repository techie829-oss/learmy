<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Music Programs', 'slug' => 'music'],
            ['name' => 'Academic Coaching', 'slug' => 'academic'],
            ['name' => 'Other Programs', 'slug' => 'other'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
