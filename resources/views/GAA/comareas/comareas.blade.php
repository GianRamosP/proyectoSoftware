@extends('layouts.plantilla')

@section('title','comareas')  

@section('content')
    <h1>En esta página podrá administrar las comisiones y areas</h1>

    <a href="{{route('comareas.createcas')}}">Nuevo Registro</a>

    <ul>
        @foreach ($comareas as $comarea)
            <li>
               <a href="{{route('comareas.showcas',$comarea->id)}}">{{$comarea->nombreComision}}</a>
            
            </li>

        @endforeach
    </ul>

    {{$comareas->links()}}
@endsection