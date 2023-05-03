<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestamo>
 */
class PrestamoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_solicitud'=>$this->faker->dateTimeBetween('-2 days', '+2 days'),
            'fecha_prestamo'=>$this->faker->dateTimeBetween('+2 days', '+5 days'),
            'fecha_devolucion'=>$this->faker->dateTimeBetween('+6 days', '+3 weeks'),
            'libro_id'=>$this->faker->numberBetween(1,1000),
            'usuario_id'=>$this->faker->numberBetween(1,1000),
        ];
    }
}
