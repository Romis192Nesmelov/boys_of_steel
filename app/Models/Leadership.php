<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    protected $fillable = [
        'image',
        'text',
        'sort',
        'active'
    ];
}
