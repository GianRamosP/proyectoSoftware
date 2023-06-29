@extends('layouts.plantilla')

@section('title','califnotas')  

@section('content')
    <h1>En esta página podrá registrar la calificacion de notas</h1>

    <a href="{{route('califnotas.createcln')}}">Nuevo Registro</a>

    <ul>
        @foreach ($califnotas as $califnota)
            <li>
               <a href="{{route('califnotas.showcln',$califnota->id)}}">{{$califnota->dia}}</a>
            
            </li>

        @endforeach
    </ul>

    {{$califnotas->links()}}
@endsection