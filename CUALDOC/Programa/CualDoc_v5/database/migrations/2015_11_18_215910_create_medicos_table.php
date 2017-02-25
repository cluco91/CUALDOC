<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicos', function(Blueprint $table)
		{
			$table->increments('id');			/*id de Medico*/
			$table->string('rut');				/*rut de Medico*/
			$table->string('nombre');			/*nombre completo de Medico*/
			$table->integer('telefono');		/*telefono*/
			/*Hay que ver si modifico la comuna o la elimino al final simplemente*/
			$table->string('comuna');			/*comuna*/
			$table->string('direccion');		/*direccion de hospital*/
			$table->string('path');				/*path de imagenes*/
			/*Relacion foranea para especialidad*/
			$table->timestamps();
			$table->integer('id_especialidad')->unsigned();
			$table->foreign('id_especialidad')->references('id')->on('especialidads');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medicos');
	}

}
