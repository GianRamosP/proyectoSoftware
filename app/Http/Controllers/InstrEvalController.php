<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstrEvaluacion;

class InstrEvalController extends Controller
{
    
    public function instreval(){
        $instrevaluacion = InstrEvaluacion::paginate();

        return view('gaa.instreval.instreval', compact('instreval'));
    }
    
    public function createie(){
        return view('gaa.instreval.createie');
    }

    public function showie($id){

        $instrevaluacion = InstrEvaluacion::find($id);
        return view('gaa.instreval.showie', compact('instreval'));    

    }
}
