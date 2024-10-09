<?php

namespace Database\Factories;

use App\Models\Endereco;
use App\Models\TipoPontoTuristico;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontoTuristico>
 */
class PontoTuristicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $latlong = $this->faker->latitude($min = -90, $max = 90) .','. $this->faker->longitude($min = -180, $max = 180);
        return [
            //
            'nome' => $this->faker->streetName,
            'imagem' => $this->faker->imageUrl($width = 640, $height = 480, 'cats'),
            'latitude_longitude' => $latlong,
            'descricao' => $this->faker->text,
            'como_chegar' => $this->faker->text,
            'ativo' => $this->faker->boolean,
            'id_tipo_ponto_turistico' => TipoPontoTuristico::pluck('id')->random(),
            'id_endereco' => Endereco::pluck('id')->random()
        ];
    }
}
