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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


Auth::routes();

Route::get('/user', 'HomeController@index')->name('user');
Route::post('/login/user', [
    'uses' => 'LoginController@login',
    'as' => 'login.user'
]);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/user', 'CreatesController@home')->name('user');

    Route::get('/admin', 'CreatesController@adminHome')->name('admin');

    Route::get('/create', function(){
        return view('create');
    });
    Route::post('/insert', 'CreatesController@add');
    Route::get('/update/{id}', 'CreatesController@update');
    Route::post('/edit/{id}', 'CreatesController@edit');
    Route::get('/read/{id}', 'CreatesController@read');
    Route::get('/delete/{id}', 'CreatesController@delete');
    Route::get('/reads/{id}', 'CreatesController@user_read');
});