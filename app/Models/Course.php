<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'features',
        'price',
        'start_date',
        'duration',
        'image_path',
        'is_featured',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'start_date' => 'date',
        'is_featured' => 'boolean',
    ];
}
