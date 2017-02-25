<?php namespace CualDocs\Http\Controllers;

use CualDocs\Http\Requests;
use CualDocs\Http\Controllers\Controller;
use CualDocs\User;
use Illuminate\Support\Facades\Session; 	/*Agregamos Session*/
use Illuminate\Support\Facades\Redirect;	/*Agregamos Redirect*/
use Illuminate\Http\Request;
use CualDocs\Http\Requests\UserCreateRequest;
use CualDocs\Http\Requests\UserUpdateRequest;
use Illuminate\Routing\Route;

class UsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	/*Constructor con un beforeFilter*/

	public function __construct()
	{
		$this->middleware('auth'); /*Para proteger tambien el controlador de usuario, y que se ejecute en todo el controlador*/
		$this->middleware('admin'); /*Un usuario comun no puede hacer crud de usuarios ni de medicos*/
		/*Primero se ejecuta el middleware de autenticacion y luego el de admin*/
		$this->beforeFilter('@find',['only' => ['edit','update', 'destroy']]);
		/*Esto es para no poner find... en cada metodo edit, update y destroy de esta clase*/
	}

	/*Metodo find()*/

	public function find(Route $route){
		$this->user = User::find($route->getParameter('usuario'));
		//return $this->user;
	}

	public function index()
	{
		/*PARA LISTAR USUARIOS*/

		/*Defino variable users donde traere del modelo todos los datos con metodo All()*/
		//$users = \CualDocs\User::All();
		//$users = User::All();

		//SI SOLO QUIERE MOSTRAR LOS ELIMINADOS
		//$users = User::onlyTrashed->paginate(10);

		$users = User::paginate(10); //Cantidad de elementos que muestre por pagina
		/*Retorna la vista index que se encuentra dentro de carpeta usuario en resources*/
		return view('usuario.index', compact('users')); /*Con ,compact('users'), le estoy enviando la info a la vista*/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuario.create'); //En carpeta usuario, tenemos la vista create.
		//create.blade.php
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserCreateRequest $request) /*Ahora ya no apunta a Request sino a UserCreateRequest*/
	{
		/*El Request es usado en Laravel para almacenar datos*/
		/*Crearlo en funcion del Modelo Usuario, es decir, el User*/
		//		\CualDocs\User::create([
		User::create([
					/*Aqui empaquetamos un tipo json*/
			/*En User.php las partes que se me permiten ser rellenadas son el nombre,
			el email y el password*/

				'name' => $request['name'], /*name es el nombre del tipo de dato para input de Nombre*/
				'email' => $request['email'], /*email es el nombre del tipo de dato para input de Correo*/

				'password' => bcrypt($request['password']), /*password es el nombre del tipo de dato para input de Password*/

		]);
		return redirect('/usuario')->with('message','Usuario Registrado Exitosamente');
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

	/*PARA EDITAR USUARIO*/
	public function edit($id)
	{
		//$user = User::find($id);
		/*Retorna Vista de Edit Usuario*/
		//return view('usuario.edit',['user'=>$user]);

		return view('usuario.edit',['user'=>$this->user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/*PARA ACTUALIZAR EL USUARIO*/
	public function update(UserUpdateRequest $request,$id)
	{
		//$user = User::find($id);
		//$user->fill($request->all());
		/*Finalmente se guarda el usuario con nuevos cambios*/
		//$user->save();

		$this->user->fill($request->all());
		$this->user->save();
		Session::flash('message','Usuario Actualizado Correctamente');
		return Redirect::to('/usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/*ELIMINAR USUARIO*/
	public function destroy($id)
	{
		//User::destroy($id);
		//$user = User::find($id);
		//$user->delete();

		$this->user->delete();
		Session::flash('message','Usuario Eliminado Correctamente');
		return Redirect::to('/usuario');
	}

}
