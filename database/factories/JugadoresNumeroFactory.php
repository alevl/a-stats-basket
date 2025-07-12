<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JugadoresNumero>
 */
class JugadoresNumeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fecha = $this->faker->randomElement(['01/11/2024','07/11/2024','01/12/2024','15/12/2024']);  
        $fecha_invertida = \Carbon\Carbon::createFromFormat('d/m/Y', $fecha)->format('Ymd');

        $minimo = $this->faker->numberBetween(1, 20);
        $maximo = $this->faker->numberBetween($minimo, 20);

        $minimo2 = $this->faker->numberBetween(1, 20);
        $maximo2 = $this->faker->numberBetween($minimo, 20);

        return [
            'fecha' => $fecha,
            'fecha_invertida' => $fecha_invertida,
            'jugador_id' => $this->faker->numberBetween(1, 100),
            'oponente_id' => $this->faker->numberBetween(1, 10),
            'liga_id' => 1,
            'campeonato_id' => 1,
            'categoria_id' => 1,
            'juegos' => '1',
            'puntos' => $this->faker->numberBetween(0, 55),
            'rebotes' => $this->faker->numberBetween(0, 20),
            'asistencias' => $this->faker->numberBetween(0, 20),
            'bloqueos' => $this->faker->numberBetween(0, 10),
            'triples_lanzados' => $minimo,
            'triples_convertidos' => $maximo,
            'tiros_libre_lanzados' => $minimo2,
            'tiros_libre_convertidos' => $maximo2,
            'robos_balon' => $this->faker->numberBetween(0, 12),
            'perdidas_balon' => $this->faker->numberBetween(0, 15),
            'faltas_cometidas' => $this->faker->numberBetween(0, 6),
            'faltas_recibidas' => $this->faker->numberBetween(0, 12),
            'recopilador_id' => '1',
        ];
    }
}