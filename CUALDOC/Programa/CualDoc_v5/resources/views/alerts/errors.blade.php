@if (Session::has('message-error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button> <!--Session nos permite almacenar info basica del usuario-->
        {{Session::get('message-error')}}
    </div>
@endif