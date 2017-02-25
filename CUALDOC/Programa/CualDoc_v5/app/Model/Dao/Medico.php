<?php namespace CualDocs\Model\Dao;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;		/*Para especificar fechas en php*/
use DB;

class Medico extends Model {

	protected $table = 'medicos'; //almacenaremos medicos

	protected $fillable = ['rut', 'nombre', 'telefono', 'comuna', 'direccion', 'path', 'id_especialidad'];


	/*Mutador*/

	public function setPathAttribute($path)
	{
		if(!empty($path)){
			$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
			$nombre = Carbon::now()->second.$path->getClientOriginalName(); /*O tambien name*/
			/*Se le concatena al nombre del archivo el segundo en que fue subido*/
			\Storage::disk('local')->put($nombre, \File::get($path));
		}
	}

	/*Metodo de Consulta*/
	public static function Medicos(){
		return DB::table('medicos')
				/*Uno con tabla especialidads donde id de especialidads sea igual a id_especialidad
				de la tabla medicos*/
				->join('especialidads', 'especialidads.id', '=', 'medicos.id_especialidad')
				/*Mostrar de esta union de tablas, todos los campos de la tabla movies
				y la especialidad de la tabla especialidads*/
				->select('medicos.*', 'especialidads.especialidad')
				->get(); /*Con esto obtenemos la consulta*/
	}

}
