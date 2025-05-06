<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhygitalHockey extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'text',
        'date'
    ];
}
