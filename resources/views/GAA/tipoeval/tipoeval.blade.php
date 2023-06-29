@extends('layouts.plantilla')

@section('title','tipoeval')  

@section('content')
    <h1>En esta página podrá crear el tipo de evaluación</h1>

    <a href="{{route('tipoeval.createte')}}">Nuevo Registro</a>

    <ul>
        @foreach ($tipoeval as $tipoevals)
            <li>
               <a href="{{route('tipoeval.showte',$tipoevals->id)}}">{{$tipoevals->descripcion}}</a>
            
            </li>

        @endforeach
    </ul>

    {{$tipoeval ->links()}}
@endsection