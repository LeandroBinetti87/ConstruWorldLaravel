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

//Rutas ConstruWorld

Route::get('/', function () {
    return view('index');
});

Route::get('/cw', function () {
    return view('index');
});


Route::get('/preguntas', function () {
    return view('preguntas');
});

Route::get('/servicios2', function () {
    return view('servicios2');
});

Route::get('/log1', function () {
    return view('log1');
});

Route::get('/reg1', function () {
    return view('reg1');
});

Route::get('/home', function () {
	echo "Probando home";
    return view('home');
});

Route::get("/home", "usuariosController@leerbase");

Route::get('/contacto', function () {
    return view('contacto');
});

//Rutas registro y login como prestador

Route::get('/registro', function () {
    return view('auth/regpres');
});

//Route::get("/registro", "prestadoresController@");

Route::get('/loginpres', function () {
    return view('auth/loginpres');
});



//Fin rutas registro y login como prestador

Auth::routes();

Route::get("/servicios2", "usuariosController@dibujar_servicios");

//Route::get('/profesiones/{esp}', ['uses' =>'usuariosController@dibujar_profesionales']);

//Route::get("/profesiones/{esp}", "usuariosController@dibujar_profesionales");

Route::get("/profesiones", "usuariosController@dibujar_profesionales");

//Profesiones

Route::get("/carpinteros", "usuariosController@dibujar_carpinteros");

Route::get("/gasistas", "usuariosController@dibujar_gasistas");

Route::get("/plomeros", "usuariosController@dibujar_plomeros");

Route::get("/electricistas", "usuariosController@dibujar_electricistas");

Route::get("/maestros-mayores-de-obra", "usuariosController@dibujar_mmos");

Route::get("/arquitectos", "usuariosController@dibujar_arquitectos");

//Fin profesiones

//Route::get("/sesion", "usuariosController@varsesion");

Route::get("/leervariables", "HomeController@show");

Route::get('/action_page', "HomeController@cw_form");

Route::get("/contratar", "usuariosController@contratar_profesionales");

Route::get("/setearcontratar/{id}", "usuariosController@setearcontratar");

//Fin rutas ConstruWorld
