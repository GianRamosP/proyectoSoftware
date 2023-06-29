@extends('layouts.plantilla')

@section('title','planclases')  

@section('content')

<h1>En esta página podrá eliminar el siguiente plan de clase</h1>

<form action="{{route('planclases.destroy', $planclase)}}" method="POST">
    @csrf
    @method('delete')
    
    <h2><strong>ID:</strong>{{$planclase->id}}</h2>
    <h2><strong>ID Docente: </strong>{{$planclase->idDocente->id}}</h2>
    <h2><strong>ID Periodo: </strong>{{$planclase->idPeriodo->id}}</h2>
    <h2><strong>ID Curso: </strong>{{$planclase->idCurso->id}}</h2>
    <h2><strong>ID Competencia: </strong>{{$planclase->competencia}}</h2>
    <h2><strong>ID Semana: </strong>{{$planclase->semana}}</h2>
    <h2><strong>ID Sesion Fecha: </strong>{{$planclase->sesionfecha}}</h2>
    <h2><strong>ID Proposito: </strong>{{$planclase->proposito}}</h2>
    <h2><strong>ID Recursos: </strong>{{$planclase->recursos}}</h2>
    <h2><strong>ID Conocimientos: </strong>{{$planclase->conocimientos}}</h2>
    <h2><strong>ID Actividades: </strong>{{$planclase->actividades}}</h2>
    <h2><strong>ID Tiempo: </strong>{{$planclase->tiempo}}</h2>

    <button type="submit">Eliminar plan de clase</button>
</form>
