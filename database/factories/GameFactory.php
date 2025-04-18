<?php

namespace Database\Factories;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => Carbon::now()->addDay(rand(0,10)),
            'place' => '«'.fake()->text(15).'» Арена',
            'score1' => rand(0,10),
            'score2' => rand(0,10),
            'description' => fake()->text(200),
        ];
    }
}
