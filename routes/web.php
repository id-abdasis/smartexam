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
    return view('layouts.app');
});

Route::group(['prefix' => 'admin'], function () {
    // route group kelas
    Route::group(['prefix' => 'kelas'], function () {
        Route::get('/', 'KelasController@index')->name('kelas.index');
        Route::get('tambah-kelas', 'KelasController@create')->name('kelas.tambah-kelas');
        Route::get('edit-kelas', 'KelasController@edit')->name('kelas.edit-kelas');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');