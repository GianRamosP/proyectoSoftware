@extends('layouts.plantilla')

@section('title','ListaAsistencia' .$listaasist-dia)  

@section('content')
    <h1>Se encuentre en el registro: {{$listaasist->dia}} </h1>

    <a href="{{route('listaasist.listaasist')}}">Volver a Lista de Asistencia</a>

    <p><strong>Hora: {{$listaasist->hora}}</strong></p>
@endsection