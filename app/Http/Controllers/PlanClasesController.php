<?php

namespace App\Http\Controllers;
use App\Models\PlanClases;

use Illuminate\Http\Request;

class PlanClasesController extends Controller
{
    public function planclases(){
        $planclases = planclases::orderBy('id', 'desc')->paginate();

        return view('gaa.planclases.planclases', compact('planclases'));
    }

    public function createpc(){
        return view('gaa.planclases.createpc');
    }


    public function planclase(){
        $planclase = planclases::orderBy('id', 'desc')->paginate();

        $idDocente = idDocente::all();
        $idPeriodo = idPeriodo::all();
        $idCurso = idCurso::all();
        $competencia = competencia::all();
        $semana = semana::all();
        $sesionfecha = sesionfecha::all();
        $proposito = proposito::all();
        $recursos = recursos::all();
        $conocimientos = conocimientos::all();
        $actividades = actividades::all();
        $tiempo = tiempo::all();
        
        return view('gaa.planclases.planclase', compact('planclase', 'idDocente', 'idPeriodo', 'idPeriodo', 'idCurso', 'competencia', 'semana', 'sesionfecha', 'proposito', 'recursos', 'conocimientos', 'actividades', 'tiempo'));
    }

    public function store(Request $request){

        $planclases = new PlanClases();

        $planclases->idDocente = $request->idDocente;
        $planclases->idPeriodo = $request->idPeriodo;
        $planclases->idCurso = $request->idCurso;
        $planclases->competencia = $request->competencia;
        $planclases->semana = $request->semana;
        $planclases->sesionfecha = $request->sesionfecha;
        $planclases->proposito = $request->proposito;
        $planclases->recursos = $request->recursos;
        $planclases->conocimientos = $request->conocimientos;
        $planclases->actividades = $request->actividades;
        $planclases->tiempo = $request->tiempo;

        $planclases->save();

        return redirect()->route('gaa.planclases.showpc',$planclases);

    }

    public function showpc($id){

        $planclases = planclases::find($id);
        return view('gaa.planclases.showpc', compact('planclases'));    

    }

    public function editpc($id){

        $idDocente = idDocente::all();
        $idPeriodo = idPeriodo::all();
        $idCurso = idCurso::all();
        $competencia = competencia::all();
        $semana = semana::all();
        $sesionfecha = sesionfecha::all();
        $proposito = proposito::all();
        $recursos = recursos::all();
        $conocimientos = conocimientos::all();
        $actividades = actividades::all();
        $tiempo = tiempo::all();

        return view('gaa.planclases.editpc', compact('idDocente', 'idPeriodo', 'idPeriodo', 'idCurso', 'competencia', 'semana', 'sesionfecha', 'proposito', 'recursos', 'conocimientos', 'actividades', 'tiempo'));
        

    }

    public function updatepc(Request $request, planclases $planclase) {
        $planclase->idDocente = $request->idDocente;
        $planclase->idPeriodo = $request->idPeriodo;
        $planclase->idCurso = $request->idCurso;
        $planclase->competencia = $request->competencia;
        $planclase->semana = $request->semana;
        $planclase->sesionfecha = $request->sesionfecha;
        $planclase->proposito = $request->proposito;
        $planclase->recursos = $request->recursos;
        $planclase->conocimientos = $request->conocimientos;
        $planclase->actividades = $request->actividades;
        $planclase->tiempo = $request->tiempo;

        $planclase->save();

        return redirect()->route('gaa.planclases.showpc',$planclases);
    }

    public function destroy(planclases $planclase) {
        try {
            $planclase->deletepc();
            return redirect()->route('gaa.planclases.planclase')->with('success', 'El plan de clase ha sido eliminado exitosamente');
        } catch(\Illuminate\Database\QueryException $ex) {
            $error_code = $ex->errorInfo[1];
            if ($error_code == 1451) {
                return redirect()->route('gaa.planclases.planclase')->with($error, 'No se pudo eliminar el plan de clase');
            }
        }
    }

    public function deletepc(planclases $planclase) {
        return view('gaa.planclases.deletepc', compact('planclase'));
    }

}
