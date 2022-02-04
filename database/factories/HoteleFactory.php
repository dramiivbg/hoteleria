<?php

namespace Database\Factories;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class HoteleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_admin' => User::all()->random()->id,
            'nombre' => $this->faker->unique()->name(),
            'direccion' => $this->faker->address(),
            'img' => $this->faker->imageUrl()

        ];
    }
}
