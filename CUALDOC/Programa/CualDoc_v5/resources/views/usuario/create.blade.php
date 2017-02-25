@extends('layouts.admin')

@section('content')
        <!--Si existen errores mostrar mensaje de Error-->
       @include('alerts.request')
    {!! Form::open(['route'=>'usuario.store','method'=>'POST']) !!} <!--Aqui le doy la ruta-->
            @include('usuario.forms.usr') <!--Incluir la SubVista del Formulario-->
            {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop