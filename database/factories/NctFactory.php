<?php

namespace Database\Factories;

use App\Models\Nct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Nct>
 */
class NctFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(10,true),
            'group' => fake()->words(10,true),
            'age' => fake()->numberBetween(21, 29),
            'members' => fake()->numberBetween(5, 25),
        ];
    }
}
