<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('../resources/css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../resources/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('../resources/css/custom.css') }}" rel="stylesheet">
    <style>
        .active {
            color: red;
            font-weight: bold;
        }
    </style>

</head>
<body>
<main class="main-content">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-md-4 col-xl-3 px-0" >
                    <aside class="sidebar sidebar-expand-md sidebar-fullpage bg-gray px-6 py-5 br-1">
                        <h>Gestión de Actividades Academicas</h>
                            <ul>
                                <i class="nav-angle rotate"></i>
                                <div class="nav" style="display:block;">
                                    <li><a class="nav-link" href="{{ asset('gaa/planclases') }}">Planes de Clases</a></li>
                                    <li><a class="nav-link" href="{{ asset('gaa/entregasilabo') }}">Entregas de Silabos</a></li>
                                    <li><a class="nav-link" href="{{ asset('gaa/consoasistencia') }}">Consolidados de Asistencia </a></li>
                                    <li><a class="nav-link" href="{{ asset('gaa/listaasitencia') }}">Listas de Asitencia</a></li>
                                    <li><a class="nav-link" href="{{ asset('gaa/tipoevaluacion') }}">Tipos de Evaluacion</a></li>
                                    <li><a class="nav-link" href="{{ asset('gaa/consonotas') }}">Consolidados de Notas</a></li>
                                    <li><a class="nav-link" href="{{ asset('gaa/calificacionnotas') }}">Calificaciones de Notas</a></li>
                                    <li><a class="nav-link" href="{{ asset('gaa/instrevaluacion') }}">Instrumentos de Evaluaciones</a></li>
                                    <li><a class="nav-link" href="{{ asset('gaa/comisionesareas') }}">Comisiones y Areas</a></li>       
                                </div>
                            </ul>
                    </aside>
                </div>
                @yield('content')
            </div>
        </div>
    </main><
    
    <script src="{{ asset('../resources/js/page.min.js') }}"></script>
    <script src="{{ asset('../resources/js/script.js') }}"></script>
     
</body>
</html>
