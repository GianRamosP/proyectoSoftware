@extends('layouts.plantilla')

@section('title','planclases')  

@section('content')
    <h1>En esta página podrá crear el plan de clases</h1>

    <a href="{{route('planclases.createpc')}}">Nuevo Registro</a>

    <ul>
        @foreach ($planclases as $planclase)
            <li>
               <a href="{{route('gaa.planclases.showpc',$planclase->id)}}">{{$planclase->semana}}</a>
            </li>

        @endforeach
    </ul>

    {{$planclases->links()}}
    
@endsection