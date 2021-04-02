<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Fake\Generator as Faker;

class EmpresaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empresa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'denominacion' => $this->faker->company,
            'telefono' => $this->faker->phoneNumber,
            'horarioAtencion' => "08:00-16:00",
            'quienesSomos' => $this->faker->text,
            'latitud' =>$this->faker->numberBetween(-50.00000, 50.00000),
            'longitud' => $this->faker->numberBetween(-50.00000, 50.00000),
            'domicilio' => $this->faker->address,
            'email' => $this->faker->email
        ];
    }
}
