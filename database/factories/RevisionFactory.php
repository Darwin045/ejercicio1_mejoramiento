<?php

namespace Database\Factories;

use App\Models\Revision;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Str;

class RevisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'filtro'   => $this->faker->boolean(),
            'aceite'   => $this->faker->boolean(),
            'frenos'   => $this->faker->boolean(),
            'coche_id' => \App\Models\Coche::factory(), 
        ];
    }
}
