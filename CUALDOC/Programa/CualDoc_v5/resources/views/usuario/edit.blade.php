@extends('layouts.admin')
@section('content')
@include('alerts.request')

<!--Para Editar Usuario-->
<!--En vez de Form::open usaremos Form:model, para que se adapte a los cambios del modelo-->
{!! Form::model($user, ['route'=>['usuario.update',$user->id], 'method'=>'PUT']) !!} <!--Aqui le doy la ruta-->
    <!--El Metodo PUT es para Actualizar-->
    @include('usuario.forms.usr')
{!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

<!--Para Borrar Usuario-->
 {!! Form::open(['route'=>['usuario.destroy',$user->id], 'method'=>'DELETE']) !!} <!--Aqui le doy la ruta-->
<!--El Metodo PUT es para Actualizar-->
{!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}

    @stop