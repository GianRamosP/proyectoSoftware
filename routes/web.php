<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanClasesController;

use App\Http\Controllers\CalifNotasController;
use App\Http\Controllers\ComAreasController;
use App\Http\Controllers\ConsoAsistController;
use App\Http\Controllers\ConsoNotasController;
use App\Http\Controllers\EntrSilaboController;
use App\Http\Controllers\InstrEvalController;
use App\Http\Controllers\ListaAsistController;
use App\Http\Controllers\TipoEvalController;
use App\Http\Controllers\GAAController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(GAAController::class)->group(function() {
    Route::get('gaa', 'bgaa');
    Route::get('gaa/planclases', 'planclases')->name('planclases.createpc');
    Route::get('gaa/entregasilabo', 'entsilabo');
    Route::get('gaa/consoasistencia', 'consoasist');
    Route::get('gaa/listaasitencia', 'listaasist');
    Route::get('gaa/tipoevaluacion', 'tipoeval');
    Route::get('gaa/consonotas', 'consonotas');
    Route::get('gaa/calificacionnotas', 'califnotas');
    Route::get('gaa/instrevaluacion', 'instreval');
    Route::get('gaa/comisionesareas', 'comareas');
});

Route::controller(PlanClasesController::class)->group(function(){

    Route::get('gaa/planclases', 'planclases')->name('planclases.planclases');

    Route::post('planclases', 'store')->name ('planclases.store');
    Route::get('gaa/planclases/create', 'createpc')->name('planclases.createpc');
    Route::get('gaa/planclases/{id}', 'showpc')->name('planclases.showpc'); 
    Route::get('gaa/planclases/{id}/edit', 'editpc')->name('planclases.editpc');  
    Route::get('gaa/planclases/{id}', 'updatepc')->name('planclases.updatepc');  
});

Route::controller(EntrSilaboController::class)->group(function(){

    Route::get('gaa/entregasilabo', 'entsilabo')->name('entsilabo.entsilabo');
    Route::get('gaa/entregasilabo/create', 'createes')->name('entsilabo.createes');
    Route::get('gaa/entregasilabo/{id}', 'showes')->name('entsilabo.showes');   
});

Route::controller(ConsoAsistController::class)->group(function(){

    Route::get('gaa/consoasistencia', 'consoasist')->name('consoasist.consoasist');
    Route::get('gaa/consoasistencia/create', 'createca')->name('consoasist.createca');
    Route::get('gaa/consoasistencia/{id}', 'showca')->name('consoasist.showca');   
});

Route::controller(ListaAsistController::class)->group(function(){

    Route::get('gaa/listaasitencia', 'listaasist')->name('listaasist.listaasist');
    Route::get('gaa/listaasitencia/create', 'createla')->name('listaasist.createla');
    Route::get('gaa/listaasitencia/{id}', 'showla')->name('listaasist.showla');   
});

Route::controller(TipoEvalController::class)->group(function(){

    Route::get('gaa/tipoevaluacion', 'tipoeval')->name('tipoeval.tipoeval');
    Route::get('gaa/tipoevaluacion/create', 'createte')->name('tipoeval.createte');
    Route::get('gaa/tipoevaluacion/{id}', 'showte')->name('tipoeval.showte');   
});

Route::controller(ConsoNotasController::class)->group(function(){

    Route::get('gaa/consonotas', 'consonotas')->name('consonotas.consonotas');
    Route::get('gaa/consonotas/create', 'createcn')->name('consonotas.createcn');
    Route::get('gaa/consonotas/{id}', 'showcn')->name('consonotas.showcn');   
});

Route::controller(CalifNotasController::class)->group(function(){

    Route::get('gaa/calificacionnotas', 'califnotas')->name('califnotas.califnotas');
    Route::get('gaa/calificacionnotas/create', 'createcln')->name('califnotas.createcln');
    Route::get('gaa/calificacionnotas/{id}', 'showcln')->name('califnotas.showcln');   
});

Route::controller(InstrEvalController::class)->group(function(){

    Route::get('gaa/instrevaluacion', 'instreval')->name('instreval.instreval');
    Route::get('gaa/instrevaluacion/create', 'createie')->name('instreval.createie');
    Route::get('gaa/instrevaluacion/{id}', 'showie')->name('instreval.showie');   
});

Route::controller(ComAreasController::class)->group(function(){

    Route::get('gaa/comisionesareas', 'comareas')->name('comareas.comareas');
    Route::get('gaa/comisionesareas/create', 'createcas')->name('comareas.createcas');
    Route::get('gaa/comisionesareas/{id}', 'showcas')->name('comareas.showcas');   
});

Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home')->middleware('auth:sanctum');

Route::resource('usuarios', UserController::class)->middleware('auth:sanctum');

Route::view('nosotros', 'nosotros')->name('nosotros')->middleware('auth:sanctum');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth:sanctum');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth:sanctum');
