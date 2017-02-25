@extends('layouts.admin')
    @section('content')
    @include('alerts.request')
        {!! Form::open(['route'=>'medico.store', 'method'=>'POST', 'files'=>true]) !!}
        @include('medico.forms.medico')
        {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::close()!!}
    @endsection