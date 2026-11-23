<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //generar datos de prueba sesnillos para el equipo
            'codigo' => $this->faker->unique()->numerify('EQ-###'),
            'nombre' => $this->faker->word(),
            'marca' => $this->faker->company(),
            'fecha_adquisicion' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['disponible', 'asignado', 'mantenimiento']),
        ];

        
    }
}
