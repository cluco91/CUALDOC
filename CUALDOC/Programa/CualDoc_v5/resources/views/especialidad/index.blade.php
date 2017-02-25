@extends('layouts.admin')
    @section('content')
        @include('especialidad.modal')
        <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
            <strong> Especialidad Actualizada Correctamente.</strong>
        </div>

        <table class="table">
            <thead>
            <th>Especialidad</th>
            <th>Operacion</th>
            </thead>
            <tbody id="datos"></tbody>
            </table>
    @endsection

@section('scripts')
    {!! Html::script('js/script2.js') !!}
@endsection