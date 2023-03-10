<?php

use App\Http\Controllers\AlgebraController;
use App\Http\Controllers\ContadorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Models\CalculoDiferencial;
use App\Models\EstadisticaDescriptiva;
use App\Models\GeometriaAnalitica;
use App\Models\GeometriaTrigonometria;

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

Route::view('equiposs','contador');


//Cartas de la ronda 1
Route::view('cardo','Ronda1.Cards.carta_g');
Route::view('cardo2','Ronda1.Cards.card2_g');
Route::view('cardo3','Ronda1.Cards.card3_g');
Route::view('cardo4','Ronda1.Cards.card4_g');
Route::view('cardo5','Ronda1.Cards.card5_g');

//cartas de la ronda 2
Route::view('cardo1_2','Ronda2.Cards.carta_g2');
Route::view('cardo2_2','Ronda2.Cards.card2_g2');
Route::view('cardo3_2','Ronda2.Cards.card3_g2');
Route::view('cardo4_2','Ronda2.Cards.card4_g2');
Route::view('cardo5_2','Ronda2.Cards.card5_g2');

//cartas de la ronda 3
Route::view('cardo1_3','RondaF.Cards.carta_g3');
Route::view('cardo2_3','RondaF.Cards.card2_g3');
Route::view('cardo3_3','RondaF.Cards.card3_g3');
Route::view('cardo4_3','RondaF.Cards.card4_g3');
Route::view('cardo5_3','RondaF.Cards.card5_g3');

// AQUI ENRUTARE EL API PARA LOS PUNTOS DE LOS EQUIPOS 
Route::resource('equipos',EquiposController::class);
Route::view('editarEquipo','equipos.editarEquipos');

Route::resource('contadores',ContadorController::class);

//Ruleta
Route::view('car','Ronda1.carrusel');
Route::view('car2','Ronda2.carrusel2');
Route::view('car3','RondaF.carrusel3');


// API para las preguntas 
Route::resource('algebra',AlgebraController::class);
Route::resource('geoanali',GeometriaAnalitica::class);
Route::resource('geotri',GeometriaTrigonometria::class);
Route::resource('estadistica',EstadisticaDescriptiva::class);
Route::resource('calculo',CalculoDiferencial::class);


Route::delete('/cardo/{id}', 'CardController@eliminar');