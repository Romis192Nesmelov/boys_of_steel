<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhygitalHockey>
 */
class PhygitalHockeyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $text = '';
        for($i=0;$i<rand(5,10);$i++) {
            $text .= '<p>'.fake()->paragraph().'</p>';
        }

        return [
            'text' => $text,
            'date' => Carbon::now()
        ];
    }
}
