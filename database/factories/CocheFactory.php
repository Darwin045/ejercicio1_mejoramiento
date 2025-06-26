<?php

namespace Database\Factories;

use App\Models\Coche;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Str;

class CocheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marca' => $this->faker->company(),
            'modelo' => $this->faker->word(),
            'color' => $this->faker->safeColorName(),
            'precio' => $this->faker->randomFloat(2, 5000, 50000),
            'cliente_id' => \App\Models\Cliente::factory(),
        ];
    }
}
