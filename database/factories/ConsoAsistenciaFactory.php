<?php

namespace Database\Factories;

use App\Models\ConsoAsistencia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConsoAsistencia>
 */
class ConsoAsistenciaFactory extends Factory
{
    protected $model = ConsoAsistencia::class;
    public function definition(): array
    {
        return [
            'idEstudiante' => $this->faker->numberBetween(),
            'fecha' => $this->faker->dateTimeBetween(),
            'hora' => $this->faker->time(),
        ];
    }
}
