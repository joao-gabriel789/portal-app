<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'data' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'titulo' => $this->faker->sentence,
            'subtitulo' => $this->faker->sentence,
            'texto' => $this->faker->text,
            'id_autor' => Autor::pluck('id')->random(),
            'id_caderno' => Caderno::pluck('id')->random()
        ];
    }
}
