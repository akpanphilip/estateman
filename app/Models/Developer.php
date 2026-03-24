<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Auto generate slug from name
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($developer) {
            $developer->slug = Str::slug($developer->name);
        });

        static::updating(function ($developer) {
            $developer->slug = Str::slug($developer->name);
        });
    }

    // One developer has many estates
    public function estates()
    {
        return $this->hasMany(Estate::class);
    }
    public function prototypes()
    {
        // Developer → Estate → Prototype
        return $this->hasManyThrough(Prototype::class, Estate::class);
    }
}
