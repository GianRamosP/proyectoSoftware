<?php

namespace Database\Factories;

use App\Models\ListaAsistencia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListaAsitencia>
 */
class ListaAsistenciaFactory extends Factory
{
    protected $model = ListaAsistencia::class;
    public function definition(): array
    {
        return [
            'idEstudiante' => $this->faker->numberBetween(),    
            'idCurso' => $this->faker->numberBetween(),
            'fecha' => $this->faker->dateTimeBetween(),
            'hora' => $this->faker->time(),
        ];
    }
}
