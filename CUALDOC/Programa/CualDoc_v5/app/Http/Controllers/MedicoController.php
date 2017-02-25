<?php namespace CualDocs\Http\Controllers;

use CualDocs\Http\Requests;
use CualDocs\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CualDocs\Model\Dao\Especialidad;
use CualDocs\Model\Dao\Medico;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class MedicoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
		$this->middleware('auth');
		//$this->middleware('admin');
		$this->beforeFilter('@find', ['only'=> ['edit', 'update', 'destroy']]);
	}


	public function find (Route $route){
		$this->medico = Medico::find($route->getParameter('medico'));
	}

	public function index()
	{
		$medicos = Medico::Medicos(); /*Esta variable recibe la consulta*/
		return view('medico.index', compact('medicos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$especialidades = Especialidad::lists('especialidad', 'id');
		return view ('medico.create', compact('especialidades')); /*LE ESTOY ENVIANDO variable especialidades*/
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Medico::create($request->all());
		//return "Listo";
		return redirect('/medico')->with('message','Medico Registrado Exitosamente');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$especialidades = Especialidad::lists('especialidad', 'id');
		return view('medico.edit', ['medico'=>$this->medico, 'especialidades'=>$especialidades]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$this->medico->fill($request->all());
		$this->medico->save();

		Session::flash('message', 'Medico Editado Correctamente');
		return Redirect::to('/medico');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->medico->delete();
		\Storage::delete($this->medico->path);
		Session::flash('message', 'Medico Eliminado Correctamente');
		return Redirect::to('/medico');
	}

}
