<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Command>
 */
class CommandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                
                'dateL' => fake()->date($format = 'Y-m-d', $max = 'now'),
                'dateR' => fake()->date($format = 'Y-m-d', $max = 'now'),
                'prixTTC' => fake()->randomNumber(),
                'notes' => fake()->word(),
        ];
    }
}
