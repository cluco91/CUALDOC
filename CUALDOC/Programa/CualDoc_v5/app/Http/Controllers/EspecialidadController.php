<?php

namespace CualDocs\Http\Controllers;

use Illuminate\Http\Request;
use CualDocs\Http\Requests;
use CualDocs\Http\Requests\EspecialidadRequest;
use CualDocs\Http\Controllers\Controller;
use CualDocs\Model\Dao\Especialidad;
use Illuminate\Routing\Route;

class EspecialidadController extends Controller
{

    public function __construct()
    {
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->especialidad = Especialidad::find($route->getParameter('especialidad'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*Metodo para listar*/
    public function listing(){
        /*Listara todas las especialidades mediante json*/
        $especialidades = Especialidad::all();

        return response()->json(
            $especialidades->toArray()
        );
    }

    public function index()
    {
        return view('especialidad.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*Retornar Vista de Especialidad*/
        return view('especialidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EspecialidadRequest $request)
    {
        if ($request->ajax()){
            Especialidad::create($request->all());
            return response()->json([
                "mensaje" => "Especialidad Registrada"
            ]);
        }
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
        $especialidad = Especialidad::find($id);

        return response()->json(
            $especialidad//->toArray() /*VER SI DESCOMENTO ESTO*/
        );
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
        $especialidad = Especialidad::find($id);
        $especialidad->fill($request->all());
        $especialidad->save();

        return response()->json([
           "mensaje" => "Listo"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->especialidad->delete();
        return response()->json([
           "mensaje" => "borrado"
        ]);
    }
}
