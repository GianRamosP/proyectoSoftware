<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsoNotas;

class ConsoNotasController extends Controller
{
    public function consonotas(){
        $consonotas = ConsoNotas::paginate();

        return view('gaa.consonotas.consonotas', compact('consonotas'));
    }

    public function createcn(){
        return view('gaa.consonotas.createcn');
    }

    public function showcn($id){

        $consonotas = ConsoNotas::find($id);
        return view('gaa.consonotas.showcn', compact('consonotas'));    

    }
}
