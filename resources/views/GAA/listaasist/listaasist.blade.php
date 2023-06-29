@extends('layouts.plantilla')

@section('title','listaasist')  

@section('content')
    <h1>En esta página podrá registrar la lista de asistencia</h1>
  
    <a href="{{route('listaasist.createla')}}">Nuevo Registro</a>

<ul>
    @foreach ($listaasist as $listaasists)
        <li>
           <a href="{{route('listaasist.showla',$listaasists->id)}}">{{$listaasists->dia}}</a>
        
        </li>

    @endforeach
</ul>

{{$listaasist->links()}}
@endsection