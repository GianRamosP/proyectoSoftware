<?php

namespace App\Http\Controllers;

use App\Models\PlanClases;
use Illuminate\Http\Request;

class GAAController extends Controller
{
    public function bgaa(){
        return view('gaa.bgaa');
    }
}
