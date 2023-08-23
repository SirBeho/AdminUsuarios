<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'nombre' => fake()->firstName(),
                'apellido' => fake()->lastName(),
                'email' => fake()->unique()->safeEmail(),
                'registro' => fake()->date(),
                'rol' => fake()->numberBetween(1, 10),
            ];
    }
}
