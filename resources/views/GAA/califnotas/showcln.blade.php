@extends('layouts.plantilla')

@section('title','CalificacionNotas' .$calificacionnotas->dia)  

@section('content')
    <h1>Se encuentre en el registro: {{$calificacionnotas->dia}} </h1>

    <a href="{{route('califnotas.califnotas')}}">Volver a Calificaciones de Notas</a>

    <p><strong>Hora: {{$calificacionnotas->hora}}</strong></p>
@endsection