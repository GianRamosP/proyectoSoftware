<?php

namespace Database\Factories;

use App\Models\ComisionesAreas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ComisionesAreas>
 */
class ComisionesAreasFactory extends Factory
{
    protected $model = ComisionesAreas::class;
    public function definition(): array
    {
        return [
            'idDocente' => $this->faker->numberBetween(),    
            'idAdministrativo' => $this->faker->numberBetween(),
            'nombreComision' => $this->faker->sentence(1,false),
            'macroProcesoComision' => $this->faker->sentence(1,false),
            'procesoComision' => $this->faker->sentence(1,false),
            'subProcesoComision' => $this->faker->sentence(1,false),
        ];
    }
}
