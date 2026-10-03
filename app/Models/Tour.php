<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tour extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'location',
        'duration_label',
        'duration_days',
        'guests_min',
        'guests_max',
        'price',
        'old_price',
        'currency',
        'discount_badge',
        'image',
        'video_url',
        'map_url',
        'rating',
        'reviews_count',
        'accommodation',
        'departure_city',
        'arrival_city',
        'best_season',
        'guide_type',
        'stay_category',
        'overview',
        'highlights',
        'notes',
        'gallery',
        'destinations',
        'included',
        'excluded',
        'places',
        'itinerary',
        'faqs',
        'duration_options',
        'is_featured',
        'is_published',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'old_price' => 'decimal:2',
            'rating' => 'decimal:1',
            'gallery' => 'array',
            'destinations' => 'array',
            'included' => 'array',
            'excluded' => 'array',
            'places' => 'array',
            'itinerary' => 'array',
            'faqs' => 'array',
            'duration_options' => 'array',
            'highlights' => 'array',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (Tour $tour) {
            if (blank($tour->slug) && filled($tour->title)) {
                $tour->slug = static::uniqueSlug($tour->title, $tour->id);
            }
        });
    }

    public static function uniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title);
        $slug = $base;
        $i = 1;

        while (static::query()
            ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
            ->where('slug', $slug)
            ->exists()) {
            $slug = $base.'-'.$i++;
        }

        return $slug;
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function imageUrl(): string
    {
        if (! $this->image) {
            return asset('turiehtml-10/turie/assets/img/tour/01.jpg');
        }

        if (Str::startsWith($this->image, ['http://', 'https://', '/'])) {
            return $this->image;
        }

        if (Str::startsWith($this->image, 'turiehtml-10/') || Str::startsWith($this->image, 'images/')) {
            return asset($this->image);
        }

        return asset('storage/'.$this->image);
    }

    public function formatPrice(?float $amount = null): string
    {
        $value = $amount ?? (float) $this->price;
        $symbol = $this->currency === 'USD' ? '$' : $this->currency.' ';

        return $symbol.number_format($value, 0);
    }

    public function detailUrl(): string
    {
        return url('/tour/'.$this->slug);
    }
}
