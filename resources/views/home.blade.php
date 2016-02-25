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
                            <li class="active"> <a href="/ad"><i class="glyphicon glyphicon-send"></i> Proyectos</a></li> 
                            <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Encuestas</a></li> 
                            <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i> Zonas</a></li>                   
                            <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Preguntas de encuestas</a></li> 
                        </ul>
                    </li>
                        <hr>
                      
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu1">Administrar Usuarios <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu1">
                            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i> Asignar Zonas</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-pushpin"></i> Asignar Folios</a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>
            @yield('contento')
        @endif 

        @if (Auth::user()->rol == 'sistema')
            <div class="col-sm-3">
                <hr>
                <ul class="nav nav-stacked">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Administrar <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu">
                            <li class="active"> <a href="#"><i class="glyphicon glyphicon-tower"></i> Clientes</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>    
                        </ul>
                    </li>
                </ul>
            </div>
        @endif

        @if (Auth::user()->rol == 'encuestador')
            <div class="col-sm-3">
                <hr>
                <ul class="nav nav-stacked">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Administrar <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu">
                            <li class="active"> <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Encuestas</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-pushpin"></i> Ver Zonas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        @endif

        @if (Auth::user()->rol == 'controlador')
            <div class="col-sm-3">
                <hr>
                <ul class="nav nav-stacked">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Administrar <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu">
                            <li class="active"> <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> Estados</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-pushpin"></i> Ver folios</a></li>    
                        </ul>
                    </li>
                 </ul>
            </div>
        @endif
    </div>
</div>

@endsection
