<?php

namespace Database\Factories;

use App\Models\InstrEvaluacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InstrEvaluacion>
 */
class InstrEvaluacionFactory extends Factory
{
    protected $model = InstrEvaluacion::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(1,false),    
            'descripcion' => $this->faker->sentence(1,false),
        ];
    }
}
