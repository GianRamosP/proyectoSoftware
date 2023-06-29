<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntregaSilabo;

class EntrSilaboController extends Controller
{
    public function entsilabo(){
        $entsilabo = EntregaSilabo::paginate();

        return view('gaa.entsilabo.entsilabo', compact('entsilabo'));
    }

    public function createes(){
        return view('gaa.entsilabo.createes');
    }

    public function showes($id){

        $entsilabo = EntregaSilabo::find($id);
        return view('gaa.entsilabo.showes', compact('entsilabo'));    

    }
}
