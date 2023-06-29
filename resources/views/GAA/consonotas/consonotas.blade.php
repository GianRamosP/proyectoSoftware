@extends('layouts.plantilla')

@section('title','consonotas')  

@section('content')
    <h1>En esta página podrá registrar el consolidado de notas</h1>

    <a href="{{route('consonotas.createcn')}}">Nuevo Registro</a>

    <ul>
        @foreach ($consonotas as $consonota)
            <li>
               <a href="{{route('consonotas.showcn',$consonota->id)}}">{{$consonota->semestre}}</a>
            
            </li>

        @endforeach
    </ul>

    {{$consonotas->links()}}
@endsection