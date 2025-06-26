<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Database\Seeders\ClienteSeeder;
use Database\Seeders\CocheSeeder;
use Database\Seeders\RevisionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crea un usuario manual
        User::factory()->create([
            'name' => 'Test User',
            'email' => fake()->unique()->safeEmail(),
        ]);

        // Ejecuta los seeders
        $this->call(ClienteSeeder::class);
        $this->call(CocheSeeder::class);
       $this->call(RevisionSeeder::class);

    }
}
