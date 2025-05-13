<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    protected $fillable = [
        'image',
        'description',
        'team_id'
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
