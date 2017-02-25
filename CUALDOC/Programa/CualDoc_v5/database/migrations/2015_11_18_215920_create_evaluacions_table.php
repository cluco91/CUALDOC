<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evaluacions', function(Blueprint $table)
		{
			$table->increments('id');				/*id de evaluacion*/
			/*Evaluaciones de puntaje 1-5*/
			$table->integer('calidad_atencion');	/*calidad de atencion*/
			$table->integer('lugar_atencion');		/*lugar de atencion*/
			$table->integer('tiempo_espera');		/*tiempo de espera*/
			$table->integer('costo');				/*costo*/
			/*Evaluacion Promedio*/
			$table->integer('evaluacion_general');	/*evaluacion_general de este medico*/
			$table->timestamps();
			$table->integer('id_usuario')->unsigned();	//->notnull();
			$table->integer('id_medico')->unsigned();	//->notnull();
			$table->foreign('id_usuario')->references('id')->on('users');
			$table->foreign('id_medico')->references('id')->on('medicos');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evaluacions');
	}

}
