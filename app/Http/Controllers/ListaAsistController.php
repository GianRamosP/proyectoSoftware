<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListaAsistencia;

class ListaAsistController extends Controller
{
    public function listaasist(){
        $listaasist = ListaAsistencia::paginate();

        return view('gaa.listaasist.listaasist', compact('listaasist'));
    }

    public function createla(){
        return view('gaa.listaasist.createla');
    }

    public function showla($id){

        $listaasist = ListaAsistencia::find($id);
        return view('gaa.listaasist.showla', compact('listaasist'));    

    }
}
