@extends('layouts.admin')
    @include('alerts.success')
        @section('content')
        <!--Mostraremos la info en una tabla-->
        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Operacion</th>
            </thead>
        <!--Aqui hacemos el recorrido con foreach-->
        @foreach($users as $user)
            <tbody>
                <td>{{$user->name}}</td> <!--name es campo de la tabla user-->
                <td>{{$user->email}}</td> <!--email es campo de la tabla user-->
                <td>
                {!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']); !!}
            <!--Dirige a formulario para editar usuario-->
                </td>
            </tbody>
        @endforeach
        </table>
        {!! $users->render() !!}
        @endsection

<!--ESTO ES SOLO NECESARIO SI APLICAMOS PAGINACION CON AJAX-->
<!--
section('scripts')
            {! Html::script('js/script3.js') !}
                endsection
    -->

