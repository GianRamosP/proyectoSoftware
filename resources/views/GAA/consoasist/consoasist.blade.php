@extends('layouts.plantilla')

@section('title','consoasist')  

@section('content')
    <h1>En esta página podrá registrar el consolidado de asistencia</h1>

    <a href="{{route('consoasist.createca')}}">Nuevo Registro</a>

    <ul>
        @foreach ($consoasist as $consoasists)
            <li>
               <a href="{{route('consoasist.showca',$consoasists->id)}}">{{$consoasists->hora}}</a>
            
            </li>

        @endforeach
    </ul>

    {{$consoasist->links()}}
@endsection