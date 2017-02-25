
<div class="form-group">
    {!! Form::label('Rut', 'Rut: ') !!}
    {!! Form::text('rut', null, ['class' => 'form-control', 'placeholder'=>'Ingresa Rut de Medico']) !!}
</div>

<div class="form-group">
    {!! Form::label('Nombre', 'Nombre: ') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Ingresa Nombre de Medico']) !!}
</div>

<!--Revisar si el integer esta bien empleado aqui-->
<div class="form-group">
    {!! Form::label('fono', 'Fono: ') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder'=>'Ingresa Nombre de Medico']) !!}
</div>

<div class="form-group">
    {!! Form::label('Comuna', 'Comuna: ') !!}
    {!! Form::text('comuna', null, ['class' => 'form-control', 'placeholder'=>'Ingresa Comuna']) !!}
</div>

<div class="form-group">
    {!! Form::label('Direccion', 'Direccion: ') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder'=>'Ingresa Direccion de Medico']) !!}
</div>

<!--REVISAR ESTE TEMA DEL PATH-->

<div class="form-group">
    {!! Form::label('Foto', 'Foto: ') !!}
    {!! Form::file('path') !!}

</div>

<div class="form-group">
    {!! Form::label('Especialidad', 'Especialidad: ') !!}
    {!! Form::select('id_especialidad',$especialidades) !!}
</div>
