<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListaAsistenciaSeeder extends Seeder
{
    public function run(): void
    {
        $listaasistencia = new ListaAsistencia();

        
        $listaasistencia->idEstudiante = '15';    
        $listaasistencia->idCurso = '365';
        $listaasistencia->fecha = '2022-05-02';
        $listaasistencia->hora  = '13:20:10';

        $listaasistencia->save();
    }
}
