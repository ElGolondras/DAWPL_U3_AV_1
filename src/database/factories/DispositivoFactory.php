<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dispositivo>
 */
class DispositivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->randomElement(['Proyector', 'PC Sobremesa', 'Laptop', 'Monitor', 'Impresora']),
            'tipo' => $this->faker->randomElement(['Periférico', 'Hardware', 'Redes']),
            'modelo' => $this->faker->bothify('??-####'),
            'estado' => $this->faker->randomElement(['Operativo', 'En reparación', 'Baja']),
            'aula_id' => \App\Models\Aula::factory(), 
        ];
    }
}
