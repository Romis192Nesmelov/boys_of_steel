<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class TeamFactory extends Factory
{
    protected static int $counter = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if (self::$counter >= 8) self::$counter = 1;
        else self::$counter++;

        return [
            'logo' => 'storage/images/teams_logos/fake_logo'.self::$counter.'.png',
            'name' => fake()->name(10),
            'city_id' => City::all()->random()->id,
            'description' => fake()->text(200)
        ];
    }
}
