<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class News extends Model
{
     use HasFactory;

    protected $fillable = ['title', 'title_en', 'slug', 'content', 'content_en', 'image', 'published_at', 'author_id'];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getLocalizedTitleAttribute(): string
    {
        if (app()->getLocale() === 'en' && filled($this->title_en)) {
            return $this->title_en;
        }

        return $this->title;
    }

    public function getLocalizedContentAttribute(): string
    {
        if (app()->getLocale() === 'en' && filled($this->content_en)) {
            return $this->content_en;
        }

        return $this->content;
    }

    // Automatically generate slug from title
    protected static function booted()
    {
        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = static::generateUniqueSlug($news->title);
            }
        });

        static::updating(function ($news) {
            if ($news->isDirty('title')) {
                $news->slug = static::generateUniqueSlug($news->title, $news->id);
            }
        });
    }

    protected static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($title);
        $slug = $baseSlug;
        $counter = 1;

        while (
            static::where('slug', $slug)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
