<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class doctorFactory extends Factory
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
            'num_pacientes' => $this->faker->integer()
        ];
    }
}
