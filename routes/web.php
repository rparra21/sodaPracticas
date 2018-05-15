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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//responde a get si uno ocupa post hace otro
Route::get('/home', 'HomeController@index')->name('home');

//nombre ruta:people
Route::resource('people', 'peopleController');

//Route::get('showpeople', 'peopleController@showpeople');
