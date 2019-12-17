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
/*
Route::get('/', function () {
    return view('layouts.master');
});*/

Route::get('/', 'AuthController@login');

//AUTH
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');




Route::group(['middleware' => ['auth','CheckRole:admin,guru']], function () {
    
    Route::get('/siswa', 'StudentsController@index');
    // Route::get('/siswa/create', 'StudentsController@create');
    Route::get('/siswa/{id}/profile', 'StudentsController@profile');
    Route::post('/siswa/{id}/addnilai', 'StudentsController@addnilai');
    Route::get('/siswa/{id}/{idsubject}/deletenilai', 'StudentsController@deletenilai');
});


Route::group(['middleware' => ['auth','CheckRole:admin']], function () {
    Route::get('/siswa/create', 'StudentsController@create');
    Route::post('/siswa', 'StudentsController@store');
    Route::get('/siswa/{id}/edit', 'StudentsController@edit');
    Route::post('/siswa/{id}/update', 'StudentsController@update');
    Route::get('/siswa/{id}/delete', 'StudentsController@destroy');
});

Route::group(['middleware' => ['auth','CheckRole:guru']], function () {
    
});

Route::group(['middleware' => ['auth','CheckRole:admin,guru,siswa']], function () {
    Route::get('/dashboard','DashboardsController@index');
    
});

