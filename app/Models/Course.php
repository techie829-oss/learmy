<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'order',
        'description',
        'features',
        'price',
        'indian_online_fee',
        'indian_offline_fee',
        'intl_online_fee',
        'intl_offline_fee',
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
