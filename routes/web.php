<?php
use App\Events\eventTrigger;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/game', function () {

    return view('principal.index');
});
*/


//autenticacion routes

Auth::routes();
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');



// Ruta Principal

Route::get('/game', 'HomeController@index')->name('game');

	//ruta para crear partidas online

Route::post('/game', 'PartidaController@Crear')->middleware('auth');

//Node Routes
	//ruta para redireccionar al juego en node
Route::get('/game/unirme/{id}', 'PartidaController@unirme')->name('unirme');


Route::get('/game/Crear+Jugador', 'PlayerController@show');


//Creacion de personajes

Route::get('/game/Crear+Personaje', 'PersonajeController@show')->middleware('auth');
Route::get('/game/Mi+Personaje', 'PersonajeController@showMi')->middleware('auth');


//Route::post('/game/Crear+Personaje', 'PersonajesController@store');
Route::post('/game/GuardarPersonaje', 'PersonajeController@store')->middleware('auth');

Route::get('/game/Trainer', 'TrainerController@show')->middleware('auth');


