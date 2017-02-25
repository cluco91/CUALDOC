@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button> <!--Session nos permite almacenar info basica del usuario-->
        {{Session::get('message')}}
    </div>
@endif