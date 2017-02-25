<?php namespace CualDocs\Http\Controllers;

class PruebaController extends Controller {

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */

    /*Metodo index*/
    public function index()
    {
        return "Hola desde PruebaControllers";
    }

    /*Metodo nombre*/

    public function nombre($nombre){
        return "Hola mi nombre es: ".$nombre;
    }
}