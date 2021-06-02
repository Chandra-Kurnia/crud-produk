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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'produkController@index');
Route::get('/create', 'produkController@create');
Route::post('/create', 'produkController@store');
Route::get('/update/{id}', 'produkController@edit');
Route::post('/update/{id}', 'produkController@update');
Route::get('delete/{id}', 'produkController@destroy');
