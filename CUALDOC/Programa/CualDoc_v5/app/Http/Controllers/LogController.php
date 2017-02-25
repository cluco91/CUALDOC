<?php

namespace CualDocs\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use Redirect;
//use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Session;
//use Illuminate\Support\Facades\Auth;
use CualDocs\Http\Requests;
use CualDocs\Http\Controllers\Controller;
use CualDocs\Http\Requests\LoginRequest;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        /*Como prueba retornamos el email que hemos enviado con el login*/
        //return $request->email;

        //Si el email y el password son iguales a lo que estamos enviando por el formulario.
        if (Auth::attempt(['email'=> $request['email'], 'password'=> $request['password']] )){
            /*Si es asi entonces nos debe redireccionar a nuestro panel admin*/
            return Redirect::to('admin');
        }


        /*Si no coinciden, entonces le debemos enviar un mensaje de error a nuestro usuario*/
        Session::flash('message-error','Datos son incorrectos');
        return Redirect::to('/');   /*Por defecto lo retorna a la raiz*/

    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
