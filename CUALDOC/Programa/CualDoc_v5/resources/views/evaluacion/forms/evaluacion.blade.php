<!--FORMULARIO GENERAL DE EVALUACION-->

<div class="form-group">
    <h1>Evaluacion de Medico</h1>
</div>


<!--Calidad de Atencion-->

<div class="form-group"><br>
    {!! Form::label('Calidad_Atencion', 'CALIDAD DE ATENCION: ') !!}
    {!! Form::selectRange('calidad_atencion', 1, 5) !!}
</div>

<!--Lugar de Atencion-->

<div class="form-group"><br>
    {!! Form::label('Lugar_Atencion', 'LUGAR DE ATENCION: ') !!}
    {!! Form::selectRange('lugar_atencion', 1, 5) !!}
</div>

<!--Tiempo de Espera-->

<div class="form-group"><br>
    {!! Form::label('Tiempo_Espera', 'TIEMPO DE ESPERA: ') !!}
    {!! Form::selectRange('tiempo_espera', 1, 5) !!}
</div>

<!--Costo-->

<div class="form-group"><br>
    {!! Form::label('Costo', 'COSTO: ') !!}
    {!! Form::selectRange('costo', 1, 5) !!}
</div>

<!--Evaluacion General-->

<div class="form-group"><br>
    {!! Form::label('Evaluacion_General', 'EVALUACION GENERAL: ') !!}
    {!! Form::selectRange('evaluacion_general', 1, 5) !!}
</div>

<!--ID_USUARIO-->

<div class="form-group">
   {!! Form::hidden('id_usuario', Auth::user()->id, ['class'=> 'form-control']) !!}

<!--ID_MEDICO-->

<div class="form-group">
    {!! Form::label('Medico', 'Medico: ') !!}
    {!! Form::select('id_medico', $medicos, '',['class'=> 'form-control']) !!}
</div>
