<?php

namespace Database\Factories;

use App\Models\CalificacionNotas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CalificacionNotas>
 */
class CalificacionNotasFactory extends Factory
{
    protected $model = CalificacionNotas::class;
    public function definition(): array
    {
        return [
            'fecha' => $this->faker->dateTimeBetween(),
            'hora' => $this->faker->time(),
        ];
    }
}
