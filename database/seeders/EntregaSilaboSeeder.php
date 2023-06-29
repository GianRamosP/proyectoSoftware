<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntregaSilaboSeeder extends Seeder
{
    public function run(): void
    {
        $entregasilabo = new EntregaSilabo();

           
        $entregasilabo->idCurso = '365';
        $entregasilabo->idEstudiante = '15';
        $entregasilabo->fecha = '2022-05-02';
        $entregasilabo->hora  = '9:30:15';

        $entregasilabo->save();
    }
}
