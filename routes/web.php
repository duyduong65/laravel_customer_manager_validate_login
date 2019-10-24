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

Route::prefix('/customers')->group(function () {
    Route::get('show-list','CustomerController@index')->name('customer.index');
    Route::get('create','CustomerController@formCreate')->name('customer.create');
    Route::post('create','CustomerController@create')->name('customer.create');
    Route::get('delete/{id}','CustomerController@destroy')->name('customer.delete');
});
