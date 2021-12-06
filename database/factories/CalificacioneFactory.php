<?php

namespace Database\Factories;

use  App\Models\Habitacione;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CalificacioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_habitacion' => Habitacione::all()->random()->id,
            'id_user' => User::all()->random()->id,
            'calificacion' => $this->faker->numerify('#'),
            'comentario' => $this->faker->text()
        ];
    }
}
