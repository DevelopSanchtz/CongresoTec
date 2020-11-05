<?php

namespace Database\Factories;

use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\This;

class usuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'apellido' => $this->faker->sentence(),
            'correo' => $this->faker->unique()->safeEmail,
            'contrasena' => $this->faker->sentence(),
            'semestre' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9]),
            'numControl' => $this->faker->randomElement([17, 18])
        ];
    }
}