<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo'=>$this->faker->sentence(),
            'autor'=>$this->faker->name(),
            'editorial'=>$this->faker->text($maxNbChars = 50),
            'anio_publicacion'=>$this->faker->date(),
            'cantidad_disponible'=>$this->faker->numberBetween(0,100)
        ];
    }
}
