<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanClasesSeeder extends Seeder
{
    public function run(): void
    {
        $planclases = new PlanClases();

        
        $planclases->idDocente = '25';    
        $planclases->idPeriodo = '2210';
        $planclases->idCurso = '365';
        $planclases->competencia = 'Evaluacion';
        $planclases->semana  = 'semana 4';
        $planclases->sesionfecha = '2022-05-20';
        $planclases->proposito  = 'Comprobar aprendizaje';
        $planclases->recursos = 'Exposicion';
        $planclases->conocimientos  = '--';
        $planclases->actividades = 'Exposicion';
        $planclases->tiempo  = '1:30:00';

        $planclases->save();
    }
}
