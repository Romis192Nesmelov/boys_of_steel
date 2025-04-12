<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use Sluggable;
    use HasFactory;

    protected $fillable = [
        'image',
        'slug',
        'head',
        'short_text',
        'text',
        'date'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'head'
            ]
        ];
    }
}
