<?php

namespace Database\Seeders;

use App\Models\Auto;
use App\Models\Marca;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $marcasConModelos = [
            'Toyota' => ['Corolla', 'Hilux', 'Yaris'],
            'Ford' => ['Fiesta', 'Ranger', 'Focus'],
            'Chevrolet' => ['Onix', 'Cruze', 'S10'],
        ];

        foreach ($marcasConModelos as $nombreMarca => $modelos) {
            $marca = Marca::factory()->create(['nombre' => $nombreMarca]);

            foreach ($modelos as $modelo) {
                Auto::factory()->create([
                    'modelo' => $modelo,
                    'marca_id' => $marca->id,
                ]);
            }
        }
    }
}
