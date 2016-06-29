<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('/', function () {
    return view('layout.master');
});

Route::get('principal', function(){
	return View::make('layout.master');
});
Route::any('iniciarSession', function () {
    return view('usuarios.login');
});
Route::any('crear/usuario', 'UsuariosController@crearUsuario');
Route::any('guardar/usuario', 'UsuariosController@guardarUsuario');
Route::any('admin/usuario', 'UsuariosController@administrarUsuario');
Route::any('modificar/usuario/{id}', 'UsuariosController@modificarUsuario');
Route::any('eliminar/usuario/{id}', 'UsuariosController@eliminarUsuario');
Route::any('crear/equipo', 'EquipoController@crearEquipo');
Route::any('guardar/equipo', 'EquipoController@guardarEquipo');
Route::any('admin/equipo', 'EquipoController@administrarEquipo');
Route::any('modificar/equipo/{id}', 'EquipoController@modificarEquipo');
Route::any('eliminar/equipo/{id}', 'EquipoController@eliminarEquipo');
Route::any('res/equipo', 'EquipoController@restaurarEquipo');
Route::any('habilitar/equipo/{id}', 'EquipoController@habilitarEquipo');
Route::any('listar/usuarios', 'SiniestroController@listarUsuarios');
Route::any('registrar/siniestro/{id}', 'SiniestroController@registrarSiniestro');
Route::any('guardar/siniestro', 'SiniestroController@guardarSiniestro');
Route::any('listar/siniestro', 'SiniestroController@listarSiniestro');
Route::any('eliminar/siniestro/{id}', 'SiniestroController@eliminarSiniestro');

/*CONSULTAS*/
Route::get('equipo/area', 
		function () {
		$area = DB::table('area')->select('nom_are', 'id_are')->get();
		return view('equipos.porArea',array('area'=>$area));
		});
Route::any('areaEquipo', 'EquipoController@porArea');
Route::get('equipo/nombre', 
		function () {
		return view('equipos.porNombre');
		});
Route::any('nombreEquipo', 'EquipoController@porNombre');
Route::get('equipo/marca', 
		function () {
		return view('equipos.porMarca');
		});
Route::any('marcaEquipo', 'EquipoController@porMarca');

Route::get('usuario/nombre', 
		function () {
		return view('usuarios.porNombre');
		});
Route::any('UporNombre', 'UsuariosController@porNombre');
Route::get('usuario/area', 
		function () {
		$area = DB::table('area')->select('nom_are', 'id_are')->get();
		return view('usuarios.porArea',array('area'=>$area));
		});
Route::any('UporArea', 'UsuariosController@uporArea');


Route::any('listar/siniestros', 'SiniestroController@listarSiniestros');

Route::get('pdf', function () {
    $pdf = PDF::setPaper('a4', 'landscape')->setWarnings(false);
    $pdf = PDF::loadView('reporte');
    return $pdf->stream('archivo.pdf');
});


Route::get('p', function () {
    return view('detalle');
});

Route::any('detalle/siniestro/{id}', 'SiniestroController@detalle');
Route::any('reporte/siniestro/{id}', 'SiniestroController@reporte');
Route::any('generar', 'SiniestroController@genera');

Route::auth();

Route::get('/home', 'HomeController@index');
