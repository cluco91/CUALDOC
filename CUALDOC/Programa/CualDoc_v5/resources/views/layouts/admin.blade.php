<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CualDoc Panel</title> <!--Este titulo se puede cambiar-->

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/metisMenu.min.css') !!}
    {!! Html::style('css/sb-admin-2.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}


</head>

<body>

<div id="wrapper">


    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin">CualDoc Panel</a>
        </div>


        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <!--Abajo imprimimos nombre de usuario-->
                {!! Auth::user()->name !!}    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil </a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <!--Esto es para que un usuario que no sea admin solo puede evaluar medicos-->
                    @if(Auth::user()->id == 1)
                    <!--USUARIOS-->
                        <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Usuarios <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!! URL::to('/usuario/create') !!}"><i class='fa fa-plus fa-fw'></i> Agregar Usuarios </a>
                            </li>
                            <li>
                                <a href="{!! URL::to('/usuario') !!}"><i class='fa fa-list-ol fa-fw'></i> Listar Usuarios </a>
                            </li>
                        </ul>
                    </li>
                    <!--MEDICOS-->
                        <li>
                        <a href="#"><i class="fa fa-stethoscope fa-fw"></i> Medicos <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!! URL::to('/medico/create') !!}"><i class='fa fa-plus fa-fw'></i> Agregar Medicos </a>
                            </li>
                            <li>
                                <a href="{!! URL::to('/medico') !!}"><i class='fa fa-list-ol fa-fw'></i> Listar Medicos </a>
                            </li>
                        </ul>
                        </li>
                    <!--ESPECIALIDAD-->
                    <li>
                        <a href="#"><i class="fa fa-medkit fa-fw"></i> Especialidad <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!! URL::to('/especialidad/create') !!}"><i class='fa fa-plus fa-fw'></i> Agregar Especialidad </a>
                            </li>
                            <li>
                                <a href="{!! URL::to('/especialidad') !!}"><i class='fa fa-list-ol fa-fw'></i> Listar Especialidades </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->id != 1)
                    <li>
                        <a href="#"><i class="fa fa-user-md fa-fw"></i> Evaluacion <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!! URL::to('/medico') !!}"><i class='fa fa-plus fa-fw'></i> Listar Medicos </a> <!--Originalmente iba a ser buscar medico-->
                            </li>
                            <li>
                                <a href="{!! URL::to('/evaluacion') !!}"><i class='fa fa-list-ol fa-fw'></i> Listar Evaluaciones </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>

    </nav>

    <div id="page-wrapper">
        @yield('content')
    </div>

</div>

{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/metisMenu.min.js') !!}
{!! Html::script('js/sb-admin-2.js') !!}

<!--Esto es para usar script de js solo cuando sea necesario-->
@section('scripts')
    @show

</body>

</html>