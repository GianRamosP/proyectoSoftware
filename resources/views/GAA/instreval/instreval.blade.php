@extends('layouts.plantilla')

@section('title','instreval')  

@section('content')
    <h1>En esta página podrá crear los instrumentos de evaluación</h1>

    <a href="{{route('instreval.createie')}}">Nuevo Registro</a>

    <ul>
        @foreach ($instrevaluacion as $instrevaluacions)
            <li>
               <a href="{{route('instreval.showie',$instrevaluacions->id)}}">{{$instrevaluacions->idTipoEvaluacion}}</a>
            
            </li>

        @endforeach
    </ul>

    {{$instrevaluacion->links()}}
@endsection