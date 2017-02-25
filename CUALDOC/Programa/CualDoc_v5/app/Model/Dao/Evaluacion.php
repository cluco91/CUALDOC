<?php namespace CualDocs\Model\Dao;

use Illuminate\Database\Eloquent\Model;
use DB;

class Evaluacion extends Model {

	protected $table = 'evaluacions';

	protected $fillable = ['calidad_atencion', 'lugar_atencion', 'tiempo_espera', 'costo',
			'evaluacion_general', 'id_usuario', 'id_medico'];



	/*Metodo de Consulta*/
	public static function Evaluaciones(){
		return DB::table('evaluacions')
				/*Uno con tabla especialidads donde id de especialidads sea igual a id_especialidad
				de la tabla medicos*/
				->join('users', 'users.id', '=', 'evaluacions.id_usuario')
				->join('medicos', 'medicos.id', '=', 'evaluacions.id_medico')

				->select('evaluacions.*', 'medicos.*', 'users.id')
				->get(); /*Con esto obtenemos la consulta*/
	}

}
