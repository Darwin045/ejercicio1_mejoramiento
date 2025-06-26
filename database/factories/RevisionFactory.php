<?php

namespace Database\Factories;

use App\Models\Coche;
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
            //no es necesario que especifiques las ubicacion del archivo
            //'coche_id' => \App\Models\Coche::factory(),
            //solo llama el modelo con el nombre del mismo  
            'coche_id' => Coche::factory(), 
        ];
    }
}
