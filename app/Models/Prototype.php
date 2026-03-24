<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Prototype extends Model
{
    use HasFactory;

    protected $fillable = [
        'estate_id',
        'name',
        'slug',
        'description',
        'price',
        'plot_size',
        'description',
        'category',
        'facebook_link',
        'instagram_link',
        'whatsapp_number',
        'phone_number',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price'     => 'decimal:2',
    ];

    // Category constants — no magic strings in your code
    const CATEGORIES = [
        'regular'     => 'Regular',
        'featured'    => 'Featured',
        // 'new_listing' => 'New Listing',
    ];

    // Auto generate slug from name
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($prototype) {
            $prototype->slug = Str::slug($prototype->name);
        });

        static::updating(function ($prototype) {
            $prototype->slug = Str::slug($prototype->name);
        });
    }

    // Prototype belongs to an estate
    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    // Prototype has many images
    public function images()
    {
        return $this->hasMany(PrototypeImage::class)->orderBy('order');
    }

    // Get the first image as cover image
    public function coverImage()
    {
        return $this->hasOne(PrototypeImage::class)->orderBy('order');
    }

    // Scope — get only featured prototypes
    public function scopeFeatured($query)
    {
        return $query->where('category', 'featured');
    }

    // Scope — get only new listings
    public function scopeNewListing($query)
    {
        return $query->where('category', 'new_listing');
    }

    // Scope — get only active prototypes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}