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
    //sistema{
    //configuracion de clientes  
    Route::get("/sistema/clientes", 'ClienteController@Index');
    Route::post("/sistema/clientes/save", 'ClienteController@PostGuardar');
    Route::get("/sistema/clientes/eliminar/{id}", 'ClienteController@Eliminar');
    Route::get("/sistema/clientes/editar/{id}", 'ClienteController@Editar');
    Route::post("/sistema/clientes/editar/{id}", 'ClienteController@EditarSave');

    Route::get("/sistema/usuarios", 'UsuarioController@Index');
    Route::post("/sistema/usuarios/save", 'UsuarioController@PostGuardar');
    Route::get("/sistema/usuarios/eliminar/{id}", 'UsuarioController@Eliminar');
    Route::get("/sistema/usuarios/editar/{id}", 'UsuarioController@Editar');
    Route::post("/sistema/usuarios/editar/{id}", 'UsuarioController@EditarSave');
    
    //administrador{
    //crea un progrcto, falta guardar editar
    Route::get('/administrador/proyecto', 'ProyectoController@Index');
    Route::get("/administrador/proyecto", 'ProyectoController@Index');
    Route::post("/administrador/proyecto/save", 'ProyectoController@PostGuardar');
    Route::get("/administrador/proyecto/eliminar/{id}", 'ProyectoController@Eliminar');
    Route::get("/administrador/proyecto/editar/{id}", 'ProyectoController@Editar');
    Route::post("administrador/proyecto/editar/{id}", 'ProyectoController@EditarSave');

    //crea un modelo de encuesta, falta guardar editar
    Route::get('/administrador/encuestas','ModeloController@RelacionarModelo');
    //asigna un modelo de encuesta a un usuario, editar eliminar
    Route::get('/administrador/asig_encuesta', 'ModeloController@Relacionar');
    //esto es para crear las distintas encuestas
    Route::get('/administrador/crear_encuesta', 'ModeloController@Index');

    //crea la zonas
    Route::get('/administrador/zonas','ZonaController@Index');
    //relaciona las zonas con los usuarios
    Route::get('/administrador/asig_zonas', 'ZonaController@Relacionar');

    //crea usuarios con cualquier rol
    Route::get('/usuarios','UsuarioController@Index');

    //asigna folios a un controlador, aun no teemos un controller donde ingresar
    Route::get('/administrador/asig_folios', 'ExtraController@AsigFolio');
    //}administrador
    
    
    //encuestador
    Route::get('/encuestador/ver_zona', 'ZonaController@Ver');
    //controlador 
    Route::get('/controlador/ver_folio', 'ExtraController@VerFolio');

    Route::get("/plantilla", function () {
        return view('index');
    });
});


