@extends('layouts.plantilla')

@section('title','ComAreas' .$comareas->nombreComision)  

@section('content')
    <h1>Se encuentre en el registro: {{$comareas->nombreComision}} </h1>

    <a href="{{route('comareas.comareas')}}">Volver a Comisiones y Areas</a>

    <p><strong>procesoComision: {{$comareas->procesoComision}}</strong></p>
@endsection