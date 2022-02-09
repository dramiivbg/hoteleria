<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PerfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'id_user' => User::all()->random()->id,
            'id_rol' => Role::all()->random()->id,
            'remember_token' => Str::random(10),
        ];
    }
}
