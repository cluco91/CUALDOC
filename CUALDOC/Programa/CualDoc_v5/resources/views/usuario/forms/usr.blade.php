<div class="form-group"><br><!--Podria ir aqui el nombre del formulario-->
    {!! Form::label('nombre', 'Nombre: ') !!}<!--Para el Label Nombre-->
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del Usuario']) !!}<!--Para el input text-->
</div>

<div class="form-group">
    {!! Form::label('correo', 'Correo: ') !!}<!--Para el Label Correo-->
    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Correo del Usuario']) !!}<!--Para el input text-->
</div>

<div class="form-group">
    {!! Form::label('contrasena', 'Contraseña: ') !!}<!--Para el Label Password-->
    {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Correo del Usuario']) !!}<!--Para el input text-->
</div>