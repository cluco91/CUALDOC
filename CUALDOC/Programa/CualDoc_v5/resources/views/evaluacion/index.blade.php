<!--LISTAR EVALUACIONES-->
@extends('layouts.admin')
@include('alerts.success')
@section('content')
    <table class="table">
        <thead>
        <th> ID_USUARIO </th>
        <th> MEDICO </th>
        <th> CALIDAD DE ATENCION </th>
        <th> LUGAR DE ATENCION </th>
        <th> TIEMPO DE ESPERA </th>
        <th> COSTO </th>
        <th> EVALUACION GENERAL </th>
        </thead>
        @foreach($evaluaciones as $evaluacion)
            <tbody>
            <td>{{$evaluacion->id_usuario}}</td>
            <td>{{$evaluacion->nombre}}</td>
            <td>{{$evaluacion->calidad_atencion}}</td>
            <td>{{$evaluacion->lugar_atencion}}</td>
            <td>{{$evaluacion->tiempo_espera}}</td>
            <td>{{$evaluacion->costo}}</td>
            <td>{{$evaluacion->evaluacion_general}}</td>
            </tbody>
        @endforeach
    </table>
@endsection