<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrototypeImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'prototype_id',
        'image',
        'order',
    ];

    protected $casts = [
        'order' => 'integer',
    ];

    // PrototypeImage belongs to a prototype
    public function prototype()
    {
        return $this->belongsTo(Prototype::class);
    }
}
