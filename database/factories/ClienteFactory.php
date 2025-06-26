<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Str;

class ClienteFactory extends Factory
{


    protected $model = Cliente::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->address(),
            'ciudad' => $this->faker->city(),
            'telefono' => $this->faker->phoneNumber(),

        ];
    }
}
