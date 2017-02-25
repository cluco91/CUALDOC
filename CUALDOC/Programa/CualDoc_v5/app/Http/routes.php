<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|post,get,put,delete
*/

/*Route::get('prueba',function(){
	return "Hola desde routes.php";
});*/

/*Referenciando a controladores*/

/*Controlador PruebaController*/
//Route::get('controlador','PruebaController@index');

//Route::get('name/{nombre}','PruebaController@nombre');

/*Ruta para Controlador RestFul*/
//Route::resource('medico','MedicoController');


/*Ruta para Controlador de CRUD Usuarios*/

Route::resource('usuario','UsuarioController');

/*Ruta para el Controlador de FrontEnd*/

/*Va a la pagina de Index*/
Route::get('/','FrontController@index');

/*Va a la pagina de Contacto*/
Route::get('contacto','FrontController@contacto');

/*Va a la pagina de Reviews*/
Route::get('reviews','FrontController@reviews');

/*Va a la pagina de Registro*/
//Route::get('registro','RegistroController');

/*Va a la pagina de Admins*/
Route::get('admin', 'FrontController@admin');

/*CONTROLADOR DE LOGIN*/

Route::resource('log','LogController');
/*Ruta del Logout*/
Route::get('logout', 'LogController@logout');

/*Controlador de Especialidad*/

Route::resource('especialidad','EspecialidadController');
Route::resource('especialidades', 'EspecialidadController@listing');

/*Controlador de Medico*/

Route::resource('medico', 'MedicoController');

/*Controlador de Evaluacion*/

Route::resource('evaluacion', 'EvaluacionController');