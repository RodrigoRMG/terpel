<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
	if(Auth::check())
	{ 
		return redirect('inicio');
	}else{
		return redirect('login');
	}
});

Route::get('admin', function () {
	if(Auth::check())
	{ 
		return redirect('admin/inicio');
	}else{
		return redirect('admin/login');
	}
});

	Route::get('login',['uses' => 'LoginController@logingeneral', 'as' => 'login']);
	Route::post('login','LoginController@postLogingeneral');
	Route::get('logout','LoginController@logout');


	//Principal General

	Route::get('inicio','GeneralController@index');
	Route::get('perfil','GeneralController@perfil');
	Route::get('catalogo','GeneralController@catalogo');
	Route::get('terminos','GeneralController@terminos');
	Route::get('detallePremio/{id}','GeneralController@detallePremio');
	Route::get('canjearPremio/{id}','GeneralController@canjearPremio');
	Route::get('estadoCuenta','GeneralController@estadoCuenta');





//Administrador
Route::group(['prefix' => 'admin'], function () {

	//Login
	Route::get('login',['uses' => 'LoginController@login', 'as' => 'login']);
	Route::post('postlogin','LoginController@postLogin');
	Route::get('logout','LoginController@logout');

	//Inicio
	Route::get('inicio','HomeController@index');

    //Premios
	Route::get('Premios','PremiosController@index');
	Route::get('agregarPremio','PremiosController@agregar');
	Route::post('agregarPremio','PremiosController@postAgregar');
	Route::get('modificarPremio/{id}','PremiosController@modificar');
	Route::post('modificarPremio','PremiosController@postModificar');
	Route::get('eliminarPremio/{id}','PremiosController@eliminar');


	//Usuarios
	Route::get('Usuarios','UsersController@index');
	Route::get('agregarUsuario','UsersController@agregar');
	Route::post('agregarUsuario','UsersController@postAgregar');
	Route::get('modificarUsuario/{id}','UsersController@modificar');
	Route::post('modificarUsuario','UsersController@postModificar');
	Route::get('eliminarUsuario/{id}','UsersController@eliminar');

	//Puntos
	Route::get('Puntos','PuntosController@index');
	Route::post('cargarPuntos','PuntosController@cargarPuntos');

	//Canjes Pendientes
	Route::get('canjesPendientes','HomeController@canjesPendientes');
	Route::get('detallesCanje/{id}','HomeController@detalleCanje');
	Route::get('terminarCanje/{id}','HomeController@terminarCanje');
});





