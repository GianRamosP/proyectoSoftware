<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalificacionNotas;

class CalifNotasController extends Controller
{
    public function califnotas(){
        $califnotas = CalificacionNotas::paginate();

        return view('gaa.califnotas.califnotas', compact('califnotas'));
    }

    public function createcln(){
        return view('gaa.califnotas.createcln');
    }

    public function showcln($id){

        $califnotas = CalificacionNotas::find($id);
        return view('gaa.califnotas.showcln', compact('califnotas'));    

    }
}
