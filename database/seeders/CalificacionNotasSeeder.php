<?php

namespace Database\Seeders;

use App\Models\CalificacionNotas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalificacionNotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $calificacionnota = new CalificacionNotas();

        $calificacionnota->fecha = '2022-05-02';
        $calificacionnota->hora  = '11:10:00';

        $calificacionnota->save();


    }
}
