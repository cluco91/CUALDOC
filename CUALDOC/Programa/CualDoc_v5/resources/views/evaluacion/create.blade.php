<!--EVALUAR MEDICO-->

@extends('layouts.admin')
@section('content')
    @include('alerts.request')

    {!! Form::open(['route'=>'evaluacion.store', 'method'=>'POST']) !!}
    @include('evaluacion.forms.evaluacion')
    {!!Form::submit('Evaluar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}

@endsection