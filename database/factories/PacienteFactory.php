<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->randomNumber(3, 100),
            'nombre' => $this->faker->word(),
            'apellidos' => $this->faker->word(),
            'dni' => $this->faker->word(),
            'fecha_nacimiento' => $this->faker->date(),
            'vacunado' => $this->faker->boolean(),
            'doctor_id' => $this->faker->randomNumber(1, 7),
        ];
    }
}
