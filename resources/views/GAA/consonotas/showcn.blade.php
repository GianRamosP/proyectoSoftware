@extends('layouts.plantilla')

@section('title','ConsoNotas' .$consonotas->semestre)  

@section('content')
    <h1>Se encuentre en el registro: {{$consonotas->semestre}} </h1>

    <a href="{{route('consonotas.consonotas')}}">Volver Consolidado de Notas</a>

    <p><strong>Fecha: {{$consonotas->fecha}}</strong></p>
@endsection