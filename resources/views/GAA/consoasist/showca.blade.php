@extends('layouts.plantilla')

@section('title','ConsoAsistencia' .$consoasist->hora)  

@section('content')
    <h1>Se encuentre en el registro: {{$consoasist->hora}} </h1>

    <a href="{{route('consoasist.consoasist')}}">Volver a Consolidado de Asistencia</a>

    <p><strong>Dia: {{$consoasist->dia}}</strong></p>
@endsection