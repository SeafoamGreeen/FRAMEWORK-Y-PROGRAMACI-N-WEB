<?php

use Illuminate\Support\Facades\Route;

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
  return view('mainwelcome');
});

/* Route::get('/contacto/{nombre?}', function ($nombre = "oop") { */
/*   return view('contacto', array( */
/*     "nombre" => $nombre */
/*   )); */
/* }); */


/* Route::get('/contacto/{nombre?}/{edad?}', function ($nombre = "oop", $edad = 25) { */
/*   return view('contacto') */
/*     ->with('nombre', $nombre) */
/*     ->with('edad', $edad); */
/* })->where([ */
/*   'nombre' => '[A-Za-z]+', */
/*   'edad' => '[0-9]+' */
/* ]); */

/* Route::get('/frutas/listado', function(){ */
/* return view('frutas-listado') */
/*   ->with('frutas', array('Naranja', 'Pera', 'Manzana', 'Frutilla')); */
/* }); */

/* Route::get('/frutas/listado', 'FrutasController@index'); */
Route::get('/login', 'LoginController@index');
Route::get('/agregar', 'AgregarController@index');
