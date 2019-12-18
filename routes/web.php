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



Route::get('/','Controller@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

<<<<<<< HEAD

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> ad42737c16ad45c96c668b679dbe185133d52655
