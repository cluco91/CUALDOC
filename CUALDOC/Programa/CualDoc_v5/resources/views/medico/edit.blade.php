@extends('layouts.admin')
@section('content')
    @include('alerts.request')

    {!!Form::model($medico,['route'=> ['medico.update',$medico->id],'method'=>'PUT','files' => true])!!}
    @include('medico.forms.medico')
    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}

    {!!Form::open(['route'=> ['medico.destroy',$medico->id],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection