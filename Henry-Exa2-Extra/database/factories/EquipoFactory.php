<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    protected $model = Equipo::class;

    public function definition(): array
    {
        return [
            'codigo' => fake()->unique()->numerify('EQ-######'),
            'nombre' => fake()->randomElement(['Portátil', 'Monitor', 'Impresora', 'Computadora de escritorio']),
            'marca' => fake()->randomElement(['Dell', 'HP', 'Lenovo', 'Acer']),
            'fecha_adquisicion' => fake()
                ->dateTimeBetween('-5 years', 'now')
                ->format('Y-m-d'),
            'estado' => fake()->randomElement(['disponible', 'asignado', 'mantenimiento']),
        ];
    }
}
