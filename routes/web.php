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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'StudentController@home')->name('home');
Route::get('/dashboard/add', 'StudentController@add_view')->name('add');
Route::get('/dashboard/edit/{id}', 'StudentController@edit')->name('edit');
Route::post('/dashboard/store', 'StudentController@store')->name('store');
