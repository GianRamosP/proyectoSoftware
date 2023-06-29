<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsoAsistenciaSeeder extends Seeder
{
    public function run(): void
    {
        $consoasistencia = new ConsoAsistencia();
            
        $consoasistencia->idEstudiante = '15';
        $consoasistencia->fecha = '2022-05-02';
        $consoasistencia->hora  = '11:20:20';

        $consoasistencia->save();
    }
}
