<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'date',
        'place',
        'team1_id',
        'team2_id',
        'score1',
        'score2',
        'description',
    ];

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class)->with('city');
    }
}
