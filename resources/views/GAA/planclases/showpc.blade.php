@extends('layouts.plantilla')

@section('title','PlanClases' .$planclases->proposito)  

@section('content')
    <h1>Se encuentre en el registro: {{$planclases->proposito}} </h1>

    <a href="{{route('planclases.planclases')}}">Volver  a Plan de Clases</a>
    <br>
    <a href="">Editar Registro</a>
    
    <p><strong>Recursos: {{$planclases->recursos}}</strong></p>
@endsection