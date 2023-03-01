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
    return view('welcome');
});
Route::view('car','carrusel');
Route::view('in2','inex2');
Route::view('master','layaout.master');
Route::view('cat1','Cards.categoria1');
Route::view('cat2','Cards.categoria2');
Route::view('mas','layaout.plantilla');
Route::view('cardo','Cards.carta_g');
Route::view('cardo2','Cards.card2_g');
Route::view('cardo3','Cards.card3_g');
Route::view('cardo4','Cards.card4_g');
Route::view('cardo5','Cards.card5_g');

