<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        Profesor::factory()->create([
            'nombre' => 'Test Profesor',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        Aula::factory()->create([
            'nombre' => 'Test Aula',
            'batch' => 'Test Batch',
        ]);

        Dispositivo::factory()->create([
            'nombre' => 'Test Dispositivo',
            'tipo' => 'Test Tipo',
            'modelo' => 'Test Modelo',
            'estado' => 'Test Estado',
            'aula_id' => 1,
        ]);
    }
}
