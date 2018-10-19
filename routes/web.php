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

//Route get untuk menampilkan form baru
Route::get('/form/create', 'FormController@create');
//Route post untuk menyimpan inputan form
Route::post('/form', 'FormController@store');
//Route get untuk menampilkan hasil inputan sesuai inputan nama dan waktu pembuatan
Route::get('/form/{id}', 'FormController@show');
