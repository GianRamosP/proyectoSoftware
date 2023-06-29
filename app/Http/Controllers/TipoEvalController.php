<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoEvaluacion;

class TipoEvalController extends Controller
{
    public function tipoeval(){
        $tipoeval = TipoEvaluacion::paginate();

        return view('gaa.tipoeval.tipoeval', compact('tipoeval'));
    }

    public function createte(){
        return view('gaa.tipoeval.createte');
    }

    public function showte($id){

        $tipoeval = TipoEvaluacion::find($id);
        return view('gaa.tipoeval.showte', compact('tipoeval'));    

    }
}
