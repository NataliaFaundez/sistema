<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');

    Route::get("/sistema", function () {
        return view('layout.app');
    });
	//crea un progrcto, falta guardar editar
    Route::get('/administrador/proyecto', 'ProyectoController@Index');
    //crea un modelo de encuesta, falta guardar editar
    Route::get('/administrador/encuestas','ModeloController@Index');
    //asigna un modelo de encuesta a un usuario, editar eliminar
    Route::get('/administrador/asig_encuesta', 'ModeloController@Relacionar');
    //crea la zonas
    Route::get('/administrador/zonas','ZonaController@Index');
    //relaciona las zonas con los usuarios
    Route::get('/administrador/asig_zonas', 'ZonaController@Relacionar');
    //crea usuarios
    Route::get('/administrador/usuarios','UsuarioController@Index');

    Route::get("/plantilla", function () {
        return view('index');
    });
     
    //asigna folios a un controlador, aun no teemos un controller donde ingresar
    Route::get('/administrador/asig_folios', function (){
        return view('administrador.asig_folios');
    });
});


