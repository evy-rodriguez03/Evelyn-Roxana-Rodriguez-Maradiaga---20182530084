<?php

namespace Database\Factories;

use App\Models\Telefono;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identidad' => $this->faker->numerify("####-####-######"),
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'foto' => $this->faker->image(),
            'salario' => $this->faker->randomFloat(null,0,7676),
            'activo' => $this->faker->boolean(),
        ];
    }
}
