<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('registros', 'API\RegistroController');
Route::resource('lineas', 'API\LineaController');
Route::resource('estaciones', 'API\EstacionController');
Route::resource('trenes', 'API\TrenController');
Route::resource('estacionesLineas', 'API\EstacionesLineaController');
Route::resource('estacionesTrenes', 'API\EstacionesTrenController');

Route::get('lines', 'API\ConsultController@lines');
Route::get('lines/{line}/stations', 'API\ConsultController@stations');
Route::get('lines/{line}/stations/{station}/hours', 'API\ConsultController@hours');
