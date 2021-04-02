<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Noticia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->realText(20),
            'resumenNoticia' => $this->faker->realText(),
            'imagen' => "https://www.luisan.net/blog/wp-content/uploads/2014/09/color_small_mk-e1549454603143.png",
            'contenidoHtml' => $this->faker->realText(),
            'publicada' => $this->faker->regexify('[yn]'),
            'fecha' => $this->faker->date(),
            'empresa_id' => $this->faker->numberBetween(1, 50)
        ];
    }
}
