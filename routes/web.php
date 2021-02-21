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

Route::prefix('contatos')->name('contatos.')->group( function () {
    Route::get('/', 'ContatoController@index')->name('index');
    Route::get('/{id}', 'ContatoController@show')->name('show');
    Route::get('/create', 'ContatoController@create')->name('create');
    Route::post('/', 'ContatoController@store')->name('store');
    Route::get('/{id}/edit', 'ContatoController@edit')->name('edit');
    Route::put('/{id}', 'ContatoController@update')->name('update');
    Route::delete('/{id}', 'ContatoController@destroy')->name('destroy');
});
