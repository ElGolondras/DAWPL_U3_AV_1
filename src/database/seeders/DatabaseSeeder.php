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
    // 1. Creamos 10 aulas primero
    $aulas = \App\Models\Aula::factory(10)->create();

    // 2. Creamos 50 dispositivos y los repartimos entre esas aulas
    \App\Models\Dispositivo::factory(50)->recycle($aulas)->create();

    // 3. (Opcional) Crea un usuario profesor para que tú puedas loguearte
    \App\Models\User::factory()->create([
        'name' => 'Profesor Victor',
        'email' => 'victor@profe.com',
        'password' => 'Usuario.25',
        'role' => 'profesor',
    ]);
}
}
