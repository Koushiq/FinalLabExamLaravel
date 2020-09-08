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
Route::post('/search', 'HomeController@search');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@entry');
Route::get('/logout', 'LogoutController@index');

Route::middleware(['sess'])->group(function(){

    Route::group(['middleware'=>['typeAdmin']], function(){
        Route::get('/admin', 'admin\AdminController@index');

        Route::get('/admin/add-employer', 'admin\AdminController@addEmployer');
        Route::post('/admin/add-employer', 'admin\AdminController@insertEmployer');

        Route::get('/admin/all-employer', 'admin\AdminController@allEmployer');

        Route::get('/admin/edit-employer/{id}', 'admin\AdminController@editEmployer');
        Route::post('/admin/edit-employer/{id}', 'admin\AdminController@updateEmployer');

        Route::get('/admin/delete-employer/{id}', 'admin\AdminController@removeEmployer');
        Route::post('/admin/delete-employer/{id}', 'admin\AdminController@deleteEmployer');

    });

    Route::group(['middleware'=>['typeEmployer']], function(){
        Route::get('/employer', 'employer\EmployerController@index');

        Route::get('/employer/add-job', 'employer\EmployerController@addJob');
        Route::post('/employer/add-job', 'employer\EmployerController@insertJob');

        Route::get('/employer/all-job', 'employer\EmployerController@allJob');

        Route::get('/employer/edit-job/{id}', 'employer\EmployerController@editJob');
        Route::post('/employer/edit-job/{id}', 'employer\EmployerController@updateJob');

        Route::get('/employer/delete-job/{id}', 'employer\EmployerController@removeJob');
        Route::post('/employer/delete-job/{id}', 'employer\EmployerController@deleteJob');

    });
    
});