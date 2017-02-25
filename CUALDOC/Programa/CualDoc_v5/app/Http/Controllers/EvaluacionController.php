<?php

namespace CualDocs\Http\Controllers;

use Illuminate\Http\Request;

use CualDocs\Http\Requests;
use CualDocs\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;
use CualDocs\User;
use CualDocs\Model\Dao\Evaluacion;
use CualDocs\Model\Dao\Medico;
use CualDocs\Http\Requests\EvaluacionCreateRequest;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $evaluaciones = Evaluacion::Evaluaciones();
        return view('evaluacion.index', compact('evaluaciones'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = Medico::lists('nombre','id');
        return \View::make('evaluacion/create',['medicos'=>$medicos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EvaluacionCreateRequest $request)
    {
        Evaluacion::create([
           'calidad_atencion' =>   $request['calidad_atencion'],
            'lugar_atencion'  =>   $request['lugar_atencion'],
            'tiempo_espera'   =>   $request['tiempo_espera'],
            'costo'           =>   $request['costo'],
            'evaluacion_general' => $request['evaluacion_general'],
            'id_usuario'        => $request['id_usuario'],
            'id_medico'         => $request['id_medico']
        ]);
        return redirect('/evaluacion')->with('message','Evaluacion Realizada Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
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
