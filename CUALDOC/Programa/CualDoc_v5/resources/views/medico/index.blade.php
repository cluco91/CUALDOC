@extends('layouts.admin')
    @include('alerts.success')
    @section('content')
        <table class="table">
            <thead>
            @if(Auth::user()->id != 1)
            <th> ID_MEDICO </th>
            @endif
            <th> RUT </th>
            <th> NOMBRE </th>
            <th> TELEFONO </th>
            <th> COMUNA </th>
            <th> DIRECCION </th>
            <th> FOTO </th>
            <th> ESPECIALIDAD </th>
            <th>Operaciones</th>
            </thead>
            @foreach($medicos as $medico)
                <tbody>
                    @if(Auth::user()->id != 1)
                    <td>{{$medico->id}}</td>
                    @endif
                    <td>{{$medico->rut}}</td>
                    <td>{{$medico->nombre}}</td>
                    <td>{{$medico->telefono}}</td>
                    <td>{{$medico->comuna}}</td>
                    <td>{{$medico->direccion}}</td>
                    <td>
                        <img src="medicos/{{$medico->path}}" alt="" style="width: 100px;"/>
                    </td>
                    <td>{{$medico->especialidad}}</td>
                    @if(Auth::user()->id == 1)
                    <td>{!!link_to_route('medico.edit', $title = 'Editar', $parameters = $medico->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
                    @endif
                    @if(Auth::user()->id != 1)
                        <td>{!!link_to_route('evaluacion.create', $title = 'Evaluar', $parameters = $medico->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
                    @endif
                </tbody>
            @endforeach
        </table>
    @endsection