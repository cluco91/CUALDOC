<?php namespace CualDocs\Http\Controllers;

use CualDocs\Http\Requests;
use CualDocs\Http\Controllers\Controller;
use CualDocs\Model\Dao\Medico;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	/*Metodo Constructor para Middleware Autenticacion*/
		public function __construct()
		{
			$this->middleware('auth',['only'=>'admin']);	/*Es el que trae laravel por defecto*/
		}


	/*Para la pagina index, es decir principal*/
	public function index()
	{
		/*Retorna vista index*/
		return view('index');
	}

	/*Para la pagina de Contacto*/
	public function contacto(){
		/*Retorna vista contacto*/
		return view('contacto');
	}

	/*Para la Pagina de Review*/
	public function reviews(){
		$medicos = Medico::Medicos();
		/*Retorna vista review*/
		return view('reviews', compact('medicos')); /*Le envio la variable medicos*/
	}

	/*Para la pagina de Registro*/
	//public function registro(){
		/*Retorna vista contacto*/
	//	return view('registrar');
	//}

	/*Para la Pagina de Admin*/

	public function admin(){
		/*Retorna vista admin*/
		return view('admin.index');
	}
}
