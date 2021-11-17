<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class pacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'apellidos' => $this->faker->word(),
            'dni' => $this->faker->word(),
            'fecha_nacimiento' => $this->faker->word(),
            'vacunado' => $this->faker->word(),
            'doctor_id' => $this->doctor::all()->random()->id
        ];
    }
}
