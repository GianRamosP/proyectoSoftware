<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsoAsistencia;

class ConsoAsistController extends Controller
{
    public function consoasist(){
        $consoasist = ConsoAsistencia::paginate();

        return view('gaa.consoasist.consoasist', compact('consoasist'));
    }

    public function createca(){
        return view('gaa.consoasist.createca');
    }

    public function showca($id){

        $consoasist = ConsoAsistencia::find($id);
        return view('gaa.consoasist.showca', compact('consoasist'));    

    }
}
