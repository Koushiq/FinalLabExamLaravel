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

//Auth::routes();

Route::get('/login', 'LoginController@index')->name('login');

Route::post('/login', 'LoginController@verify')->name('login');

/* Route::get('/login', 'LoginController@index');

Route::post('/login', 'LoginController@verify'); */

Route::get('/home', 'HomeController@index')->name('home');
