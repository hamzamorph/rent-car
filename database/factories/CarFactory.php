<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        
            return [
                'marque' => fake()->company(),
                'modele' => fake()->year('car'),
                'type' => fake()->word('car'),
                'prix_jour' => fake()->randomNumber(),
                'dispo' => fake()->boolean(),
            ];
        
    }
}
