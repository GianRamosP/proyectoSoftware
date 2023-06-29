<?php

namespace Database\Seeders;

use App\Models\tipoevaluacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoEvaluacionSeeder extends Seeder
{
    public function run ():void
    {
        $tipoevaluacion = new TipoEvaluacion();

        $tipoevaluacion->descripcion = 'El estudiante debe responder a preguntas en tiempo real y en voz alta';
        $tipoevaluacion->formato = 'Evaluacion Oral';

        $tipoevaluacion->save();
    }
}