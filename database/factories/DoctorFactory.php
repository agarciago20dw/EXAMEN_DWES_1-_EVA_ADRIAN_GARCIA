<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->randomNumber(3, 7),
            'nombre' => $this->faker->word(),
            'apellidos' => $this->faker->word(),
            'num_pacientes' => $this->faker->randomNumber(1, 10),
        ];
    }
}
