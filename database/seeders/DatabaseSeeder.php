<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Memanggil PlanetSeeder untuk dieksekusi
        $this->call([
            PlanetSeeder::class,
        ]);
    }
}