<?php

namespace Database\Factories;

use App\Models\PlanClases;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlanClases>
 */
class PlanClasesFactory extends Factory
{
    protected $model = PlanClases::class;
    public function definition(): array
    {
        return [
            'idDocente'=> $this->faker->numberBetween(),    
            'idPeriodo'=> $this->faker->numberBetween(),
            'idCurso'=> $this->faker->numberBetween(),
            'competencia'=> $this->faker->sentence(1,false),
            'semana'=> $this->faker->text(15),
            'sesionfecha'=> $this->faker->dateTimeBetween(),
            'proposito'=> $this->faker->sentence(1,false),
            'recursos'=> $this->faker->sentence(1,false),
            'conocimientos'=> $this->faker->sentence(1,false),
            'actividades'=> $this->faker->sentence(1,false),
            'tiempo'=> $this->faker->time(),
        ];
        
    }
}
