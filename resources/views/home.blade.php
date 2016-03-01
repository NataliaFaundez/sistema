@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (Auth::user()->rol == 'administrador')
            <div class="col-sm-3">
                <hr>
                <ul class="nav nav-stacked">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Administrar Proyectos <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu">
                            <li class="active"> <a href="/administrador/proyecto"><i class="glyphicon glyphicon-send"></i> Proyectos</a></li> 
                            <li><a href="/administrador/encuestas"><i class="glyphicon glyphicon-list-alt"></i> Encuestas</a></li> 
                            <li><a href="/administrador/crear_encuesta"><i class="glyphicon glyphicon-list-alt"></i> Preguntas de encuestas</a></li> 
                            <li><a href="/administrador/asig_encuesta"><i class="glyphicon glyphicon-list-alt"></i> Asignar encuestas</a></li> 
                            <li><a href="/administrador/zonas"><i class="glyphicon glyphicon-map-marker"></i> Zonas</a></li>                   
                        </ul>
                    </li>
                        <hr>
                      
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu1">Administrar Usuarios <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu1">
                            <li><a href="/usuarios"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>
                            <li><a href="/administrador/asig_zonas"><i class="glyphicon glyphicon-map-marker"></i> Asignar Zonas</a></li>
                            <li><a href="/administrador/asig_folios"><i class="glyphicon glyphicon-pushpin"></i> Asignar Folios</a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>
            @yield('proyecto')
            @yield('encuestas')
            @yield('zonas')
            @yield('usuarios')
            @yield('asig_encuesta')
            @yield('asig_zonas')
            @yield('asig_folios')            
            @yield('crear_encuesta')
            @yield('editar_zonas')
        @endif 

        @if (Auth::user()->rol == 'sistema')
            <div class="col-sm-3">
                <hr>
                <ul class="nav nav-stacked">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Administrar <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu">
                            <li class="active"> <a href="/sistema/clientes"><i class="glyphicon glyphicon-tower"></i> Clientes</a></li>
                            <li><a href="/usuarios"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>    
                        </ul>
                    </li>
                </ul>
            </div>
            @yield('clientes')            
            @yield('content')
            @yield('usuarios')                       
        @endif

        @if (Auth::user()->rol == 'encuestador')
            <div class="col-sm-3">
                <hr>
                <ul class="nav nav-stacked">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Administrar <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu">
                            <li class="active"> <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Encuestas</a></li>
                            <li><a href="/encuestador/ver_zona"><i class="glyphicon glyphicon-pushpin"></i> Ver Zonas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            @yield('ver_zona')
            @yield('crear_encuesta')
        @endif

        @if (Auth::user()->rol == 'controlador')
            <div class="col-sm-3">
                <hr>
                <ul class="nav nav-stacked">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Administrar <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu">
                            <li class="active"> <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> Estados</a></li>
                            <li><a href="/controlador/ver_folio"><i class="glyphicon glyphicon-pushpin"></i> Ver folios</a></li>    
                        </ul>
                    </li>
                 </ul>
            </div>
            @yield('ver_folio')
        @endif
    </div>
</div>

@endsection
