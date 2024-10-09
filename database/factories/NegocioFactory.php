<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Negocio>
 */
class NegocioFactory extends Factory
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
            'nomeFantasia' => $this->faker->name , 
            'contato' => $this->faker->phoneNumber ,
            'latitude_longitude' => $latlong ,
            'descricao' => $this->faker->text ,
            'ativo' => $this->faker->boolean ,
            'id_tipo_negocio' => TipoNegocio::pluck('id')->random(),
            'id_endereco' => Endereco::pluck('id')->random()
        ];
    }
}
