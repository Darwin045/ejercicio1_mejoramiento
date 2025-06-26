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
        Revision::factory()->count(10)->create();
    }
}


