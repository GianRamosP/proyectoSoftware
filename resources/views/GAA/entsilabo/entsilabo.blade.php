@extends('layouts.plantilla')

@section('title','entsilabo')  

@section('content')
    <h1>Entrega de Silabo </h1>

    <a href="{{route('entsilabo.createes')}}">Nuevo Registro</a>

    <ul>
        @foreach ($entsilabo as $entsilabos)
            <li>
               <a href="{{route('entsilabo.showes',$entsilabos->id)}}">{{$entsilabos->hora}}</a>
            
            </li>

        @endforeach
    </ul>

    {{$entsilabo->links()}}
@endsection