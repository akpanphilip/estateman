<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Estate extends Model
{
    use HasFactory;

    protected $fillable = [
        'developer_id',
        'name',
        'slug',
        'location',
        'description',
        'image',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Auto generate slug from name
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($estate) {
            $estate->slug = Str::slug($estate->name);
        });

        static::updating(function ($estate) {
            $estate->slug = Str::slug($estate->name);
        });
    }

    // Estate belongs to a developer
    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    // Estate has many prototypes
    public function prototypes()
    {
        return $this->hasMany(Prototype::class);
    }
}