@extends('layouts.plantilla')

@section('title','TipoEvaluacion' .$tipoeval->descripcion)  

@section('content')
    <h1>Se encuentre en el registro: {{$tipoeval->descripcion}} </h1>

    <a href="{{route('tipoeval.tipoeval')}}">Volver  a Tipo de Evalucion</a>

    <p><strong>Formato: {{$tipoeval->formato}}</strong></p>
@endsection