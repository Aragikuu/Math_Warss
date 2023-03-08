<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;

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
    return view('welcome');
});

Route::view('in2','inex2');
// Route::view('master','layaout.master');
Route::view('cat1','categoria1');
Route::view('cat2','categoria2');
Route::view('master','layaout.plantilla');

Route::view('equipos','contador');


//Cartas de la ronda 1
Route::view('cardo','Ronda1.Cards.carta_g');
Route::view('cardo2','Ronda1.Cards.card2_g');
Route::view('cardo3','Ronda1.Cards.card3_g');
Route::view('cardo4','Ronda1.Cards.card4_g');
Route::view('cardo5','Ronda1.Cards.card5_g');

//cartas de la ronda 2

//cartas de la ronda 3


// AQUI ENRUTARE EL API PARA LOS PUNTOS DE LOS EQUIPOS 
Route::resource('equipos',EquiposController::class);
Route::view('editarEquipo','equipos.editarEquipos');

//Ruleta
Route::view('car','Rond1.carrusel');

