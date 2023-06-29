<?php

namespace Database\Factories;

use App\Models\EntregaSilabo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EntregaSilabo>
 */
class EntregaSilaboFactory extends Factory
{
    protected $model = EntregaSilabo::class;
    public function definition(): array
    {
        return [    
            'idCurso' => $this->faker->numberBetween(),
            'idEstudiante' => $this->faker->numberBetween(),
            'fecha' => $this->faker->dateTimeBetween(),
            'hora' => $this->faker->time(),
        ];
    }
}
