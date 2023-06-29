<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstrEvaluacionSeeder extends Seeder
{
    public function run(): void
    {
        $instrevaluacion = new InstrEvaluacion();

        $instrevaluacion->nombre = 'Examen';
        $instrevaluacion->descripcion = 'Prueba escrita';

        $instrevaluacion->save();
    }
}
