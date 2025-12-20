<?php

namespace Database\Factories;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $participantTypes = [2,5,7];
        $chosenType = $participantTypes[rand(0,2)];

        return [
            'surname' => fake()->firstNameFemale(),
            'name' => fake()->name(),
            'number' => $chosenType == 2 || $chosenType == 7 ? rand(1,50) : null,
            'born' => Carbon::now()->subYear(rand(20,30)),
            'participant_type_id' => $chosenType,
            'team_id' => $chosenType == 2 ? Team::all()->random()->id : null
        ];
    }
}
