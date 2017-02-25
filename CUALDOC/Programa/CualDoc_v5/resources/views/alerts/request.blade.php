@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button> <!--Session nos permite almacenar info basica del usuario-->
        <ul>
            @foreach($errors->all() as $error) <!--Para Mostrar todos los errores-->
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif