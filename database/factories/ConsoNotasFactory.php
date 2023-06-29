<?php

namespace Database\Factories;
use App\Models\ConsoNotas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConsoNotas>
 */
class ConsoNotasFactory extends Factory
{
    protected $model = ConsoNotas::class;
    public function definition(): array
    {
        return [

            'semestre' => $this->faker->numberBetween(1,4),
            'fecha' => $this->faker->dateTimeBetween(),
            'idDocente' => $this->faker->numberBetween(),
            'firma' => $this->faker->sentence(1,false),
        ];
    }
}
