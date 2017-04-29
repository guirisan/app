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
Route::resource('plantes', 'PlantaController', ['parameters' => [
    'plantes' => 'planta'
]]);

Route::post('plantes/{planta}/storePlaga', ['as' => 'plantes.storePlaga',
    'uses' => 'PlantaController@storePlaga'
]);

Route::post('plantes/{planta}/storeRemei', ['as' => 'plantes.storeRemei',
    'uses' => 'PlantaController@storeRemei'
]);



Route::resource('grups','GrupController', ['parameters' => [
    'grups' => 'grup'
]]);

Route::resource('families', 'FamiliaController', ['parameters' => [
    'families' => 'familia'
]]);

Route::resource('plagues', 'PlagaController', ['parameters' => [
    'plagues' => 'plaga'
]]);

Route::post('plagues/{plaga}/storePlanta', ['as' => 'plagues.storePlanta',
    'uses' => 'PlagaController@storePlanta'
]);


Route::resource('remeis', 'RemeiController', ['parameters' => [
    'remeis' => 'remei'
]]);

Route::resource('bancals', 'BancalController', ['parameters' => [
    'bancals' => 'bancal'
]]);

Route::resource('parceles', 'ParcelaController', ['parameters' => [
    'parceles' => 'parcela'
]]);

Route::resource('images', 'ImageController', ['parameters' => [
    'images' => 'image'
]]);


Route::resource('cultius', 'CultiuController', ['parameters' => [
    'cultius' => 'cultiu'
]]);

