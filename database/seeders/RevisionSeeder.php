<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Revision;

class RevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea 10 revisiones, cada una con su propio coche
        Revision::factory()->count(10)->create();
        
    }
}