@extends('layouts.plantilla')

@section('title','createpc')  

@section('content')
    <h1>En esta pagina podrá crear un nuevo registro</h1>

    <form action="{{route('planclases.store')}}" method="POST" >

        
        @csrf
        
        

        <label> Docente:
            <br>
            <input type="text" name="idDocente"></textarea>
        </label>
        <br><br>

        <label> Periodo:
            <br>
            <input type="text" name="idPeriodo"></textarea>
        </label>
        <br><br>

        <label> Curso:
            <br>
            <input type="text" name="idCurso"></textarea>
        </label>
        <br><br>

        <label> Competencia:
            <br>
            <input type="text" name="competencia"></textarea>   
        </label>
        <br><br>

        <label> Semana:
            <br>
            <input type="text" name="semana"></textarea>
        </label>
        <br><br>

        <label> Sesion Fecha:
            <br>
            <input type="text" name="sesionfecha"></textarea>
        </label>
        <br><br>

        <label> Proposito:
            <br>
            <input type="text" name="proposito"></textarea>
        </label>
        <br><br>

        <label> Recursos:
            <br>
            <input type="text" name="recursos"></textarea>
        </label>
        <br><br>

        <label> Conocimientos:
            <br>
            <input type="text" name="conocimientos"></textarea>
        </label>
        <br><br>

        <label> Actividades:
            <br>
            <input type="text" name="actividades"></textarea>
        </label>
        <br><br>

        <label> Tiempo:
            <br>
            <input type="text" name="tiempo"></textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>
@endsection