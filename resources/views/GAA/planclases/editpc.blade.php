@extends('layouts.plantilla')

@section('title','createpc')  

@section('content')
    <h1>En esta pagina podrá editar un nuevo registro</h1>

    <form action="{{route('planclases.update', $planclase)}}" method="POST" >

        
        @csrf
        @method('put')
        

        <label> Docente:
            <br>
            <input type="number" name="idDocente" value="{{$planclase->idDocente}}">
        </label>
        @error('titulo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br><br>

        <label> Periodo:
            <br>
            <input type="number" name="idPeriodo" value="{{$planclase->idPeriodo}}">
        </label>
        @error('titulo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br><br>

        <label> Curso:
            <br>
            <input type="number" name="idCurso" value="{{$planclase->idCurso}}">
        </label>
        @error('curso')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br><br>

        <label> Competencia:
            <br>
            <textarea name="competencia" rows="5"> {{$planclase->competencia}}</textarea>
        </label>
        @error('competencia')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br><br>

        <label> Semana:
            <br>
            <input type="text" name="semana"  rows="5"> {{$planclase->semana}}"></textarea>
        </label>
        @error('semana')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br><br>

        <label> Sesion Fecha:
            <br>
            <input type="date" name="sesionfecha" value="{{$planclase->sesionfecha}}"></input>
        </label>
        @error('sesionfecha')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br><br>

        <label> Proposito:
            <br>
            <input type="text" name="proposito" rows="5"> {{$planclase->proposito}}"></textarea>
        </label>
        @error('proposito')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br><br>

        <label> Recursos:
            <br>
            <input type="text" name="recursos" rows="5"> {$planclase->recursos}}"></textarea>
        </label>
        @error('recursos')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br><br>

        <label> Conocimientos:
            <br>
            <input type="text" name="conocimientos" rows="5"> {{$planclase->conocimientos}}"></textarea>
        </label>
        @error('conocimientos')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br><br>

        <label> Actividades:
            <br>
            <input type="text" name="actividades" rows="5"> {{$planclase->actividades}}"></textarea>
        </label>
        @error('actividades')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br><br>

        <label> Tiempo:
            <br>
            <input type="time" name="tiempo" value="{{$planclase->tiempo}}"></input>
        </label>
        @error('tiempo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>
@endsection