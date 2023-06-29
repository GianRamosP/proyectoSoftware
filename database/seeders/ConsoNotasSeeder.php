<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsoNotasSeeder extends Seeder
{
    public function run(): void
    {
        $consonota = new ConsoNotas();

        $consonota->semestre = 'I Semestre';
        $consonota->fecha = '2022-05-02';
        $consonota->idDocente = '25';
        $consonota->firma  = '-----';

        $consonota->save();
    }
}
