@extends('layouts.admin')

@section('content')
@include('alerts.errors')

    <!--AQUI DEBERIA MOSTRAR EL ID DEL USUARIO O SU CORREO-->
    <h2>Bienvenido a su Panel</h2>
    <h3>Sus Datos son: </h3>
    <p>ID: {!! Auth::user()->id !!}</p>
    <p>NOMBRE: {!! Auth::user()->name !!}</p>
    <p>CORREO: {!! Auth::user()->email !!}</p>

    @endsection