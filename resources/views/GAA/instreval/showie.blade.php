@extends('layouts.plantilla')

@section('title','InstrEvaluacion' .$instreval->idPlanClase)  

@section('content')
    <h1>Se encuentre en el registro: {{$instreval->idPlanClase}} </h1>

    <a href="{{route('instreval.instreval')}}">Volver a Instrumento de Evaluación</a>

    <p><strong>Nombre: {{$instreval->idPlanClase}}</strong></p>
@endsection