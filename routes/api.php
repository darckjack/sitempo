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
Route::get('prediction2/{id}', 'API\PrediccionesController@predictionGetType2');
Route::get('prediction4/{id}', 'API\PrediccionesController@predictionGetType4');
Route::get('prediction_web2/{id}', 'API\PrediccionesController@predictionWebType2');
Route::get('prediction_web4/{id}', 'API\PrediccionesController@predictionWebType4');
