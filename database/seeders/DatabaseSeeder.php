<?php

namespace Database\Seeders;

use App\Models\CalificacionNotas;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\ComisionesAreas;
use App\Models\ConsoAsistencia;
use App\Models\ConsoNotas;
use App\Models\EntregaSilabo;
use App\Models\InstrEvaluacion;
use App\Models\ListaAsistencia;
use App\Models\PlanClases;
use App\Models\TipoEvaluacion;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {   
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        
        User::factory(10)->create();
        CalificacionNotas::factory(50)->create();
        ComisionesAreas::factory(50)->create();
        ConsoAsistencia::factory(50)->create();
        ConsoNotas::factory(50)->create();
        EntregaSilabo::factory(50)->create();
        InstrEvaluacion::factory(50)->create();
        ListaAsistencia::factory(50)->create();
        PlanClases::factory(50)->create();
        TipoEvaluacion::factory(50)->create();
    }
}
