@extends('layouts.principal')

@section('content')

<div class="contact-content">
    <div class="top-header span_top">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="" /></a>
            <p>Contactanos</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <!---contact-->
    <div class="main-contact">
        <h3 class="head">CONTACTO</h3>
        <div class="contact-form">
            <form>
                <div class="col-md-6 contact-left">
                    <input type="text" placeholder="Ingrese Nombre" required/>
                    <input type="text" placeholder="Ingrese Correo Electronico" required/>
                    <input type="text" placeholder="Ingrese su Telefono" required/>
                </div>
                <div class="col-md-6 contact-right">
                    <textarea placeholder="Mensaje"></textarea>
                    <input type="submit" value="ENVIAR"/>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    </div>
    @stop