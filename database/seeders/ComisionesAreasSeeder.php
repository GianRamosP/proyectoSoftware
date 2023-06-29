<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComisionesAreasSeeder extends Seeder
{
    public function run(): void
    {
        $comisionesareas = new ComisionesAreas();

        $comisionesareas->idDocente = '25';    
        $comisionesareas->idAdministrativo = '35';
        $comisionesareas->nombreComision = 'Planificación y Desarrollo Academico';
        $comisionesareas->macroProcesoComision  = 'Diseño y actualización de programas de estudio';
        $comisionesareas->procesoComision  = 'Analisis de programas de estudio existentes';
        $comisionesareas->subProcesoComision  = 'Diseño de los planes de estudio';

        $comisionesareas->save();
    }
}
