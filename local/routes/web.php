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

Route::get('inicio2', function () {
return view('movil.catalogo');
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
	Route::get('Contacto','GeneralController@contacto');
	Route::get('carrito','GeneralController@carrito');
	Route::get('eliminarCarrito/{id}','GeneralController@eliminarCarrito');
	Route::get('aceptoTerminos','GeneralController@aceptoTerminos');

	Route::get('terminarCompra','GeneralController@terminarCompra');






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


	//Asesores
	Route::get('Asesores','AsesoresController@index');
	Route::get('agregarAsesor','AsesoresController@agregar');
	Route::post('agregarAsesor','AsesoresController@postAgregar');
	Route::get('modificarAsesor/{id}','AsesoresController@modificar');
	Route::post('modificarAsesor','AsesoresController@postModificar');
	Route::get('eliminarAsesor/{id}','AsesoresController@eliminar');


	//EDS
	Route::get('Eds','EdsController@index');
	Route::get('agregarEds','EdsController@agregar');
	Route::post('agregarEds','EdsController@postAgregar');
	Route::get('modificarEds/{id}','EdsController@modificar');
	Route::post('modificarEds','EdsController@postModificar');
	Route::get('eliminarEds/{id}','EdsController@eliminar');

	//Cargar usuarios
	Route::get('cargarUsuarios','UsersController@cargarUsuarios');
	Route::post('cargarUsuarios','UsersController@postcargarUsuarios');

	//Puntos
	Route::get('Puntos','PuntosController@index');
	Route::post('Puntos','PuntosController@postPuntos');
	Route::get('cargarPuntos','PuntosController@getCargarPuntos');
	Route::post('cargarPuntos','PuntosController@cargarPuntos');
	Route::get('eliminarCarga/{fecha}','PuntosController@eliminarCarga');

	//Canjes Pendientes
	Route::get('canjesPendientes','HomeController@canjesPendientes');
	Route::get('detallesCanje/{id}','HomeController@detalleCanje');
	Route::get('terminarCanje/{id}','HomeController@terminarCanje');

	//Reportes
	Route::get('reporteUsuarios','HomeController@reporteUsuarios');
});





