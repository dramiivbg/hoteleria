<?php

namespace Database\Factories;

use App\Models\Hotele;

use Illuminate\Database\Eloquent\Factories\Factory;

class HabitacioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_hotel' => Hotele::all()->random()->id,
            'nombre' => $this->faker->unique()->name(),
            'valor' => $this->faker->numerify(),
            'descripcion' => $this->faker->text(),
            'img' => $this->faker->text()
        ];
    }
}
