@extends('layouts.plantilla')

@section('title','EntregaSilabo' .$entsilabo->hora)  

@section('content')
    <h1>Se encuentre en el registro: {{$entsilabo->hora}} </h1>

    <a href="{{route('entsilabo.entsilabo')}}">Volver a Entrega de Silabo</a>

    <p><strong>Dia: {{$entsilabo->dia}}</strong></p>
@endsection