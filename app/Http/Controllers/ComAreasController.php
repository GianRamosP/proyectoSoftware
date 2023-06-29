<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComisionesAreas;

class ComAreasController extends Controller
{
    public function comareas(){
        $comareas = ComisionesAreas::paginate();

        return view('gaa.comareas.comareas', compact('comareas'));
    }

    public function createcas(){
        return view('gaa.comareas.createcas');
    }

    public function showcas($id){

        $comareas = ComisionesAreas::find($id);
        return view('gaa.comareas.showcas', compact('comareas'));    

    }
}
