<?php

namespace Database\Factories;

use App\Models\TipoEvaluacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tipoevaluacion>
 */
class TipoEvaluacionFactory extends Factory
{
    protected $model = TipoEvaluacion::class;
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->sentence(),
            'formato' => $this->faker->sentence(1,false),
        ];
    }
}
