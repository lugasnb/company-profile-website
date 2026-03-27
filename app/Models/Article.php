<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'excerpt',
        'content',
        'thumbnail',
        'author',
        'read_time',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    // Auto generate slug dari title
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($article) {
            $article->slug = str()->slug($article->title);
        });
    }

    // Scope hanya artikel yang published
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}