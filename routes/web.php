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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


//custom routes


// Route::get('/plantes', 'PlantaController@index');
Route::get('/plantes', 'PlantaController@index');
Route::get('/plantes/create/', 'PlantaController@create');

Route::post('/plantes?{planta}', 'PlantaController@update');
// http://localhost:8000/plantes?1

// Route::post('/plantes', 'PlantaController@store');
Route::post('/plantes', ['as' => 'plantes', 'uses' => 'PlantaController@store']);

Route::get('/plantes/{planta}/edit', 'PlantaController@edit');

Route::get('/plantes/{planta}/', 'PlantaController@show');








Route::get('/grups', 'GrupController@index');

Route::get('/families', 'FamiliaController@index');
