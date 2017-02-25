@extends('layouts.principal')
    @section('content')
        <div class="review-content">
            <div class="top-header span_top">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="" /></a>
                    <p>MEDICOS EVALUADOS</p>
                </div>
                    <div class="clearfix"></div>
            </div>

    <div class="reviews-section">
        <h3 class="head">Reviews Medicos</h3>
        <div class="col-md-9 reviews-grids">

            @foreach($medicos as $medico)
                <div class="review">
                    <div class="movie-pic">
                        <img src="medicos/{{$medico->path}}" alt="" />
                    </div>
                <div class="review-info">
                    <a class="span" href="#"><i>RUT: {{$medico->rut}}</i></a>
                    <br><br><br><br>
                    <p class="info">NOMBRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$medico->nombre}}</p>
                    <p class="info">TELEFONO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$medico->telefono}}</p>
                    <p class="info">COMUNA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$medico->comuna}}</p>
                    <p class="info">DIRECCION:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$medico->direccion}}</p>
                    <p class="info">ESPECIALIDAD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$medico->especialidad}}</p>
                    <p class="info">EVALUACION GENERAL:  &nbsp; &nbsp;&nbsp;&nbsp;2</p>
                </div>
                <div class="clearfix"></div>
            </div>
                @endforeach
        </div>
        <div class="clearfix"></div>
    </div>
        </div>
<div class="review-slider">
    <ul id="flexiselDemo1">
        <li><img src="images/r1.jpg" alt=""/></li>
        <li><img src="images/r2.jpg" alt=""/></li>
        <li><img src="images/r3.jpg" alt=""/></li>
        <li><img src="images/r4.jpg" alt=""/></li>
        <li><img src="images/r5.jpg" alt=""/></li>
        <li><img src="images/r6.jpg" alt=""/></li>
    </ul>
</div>
@endsection