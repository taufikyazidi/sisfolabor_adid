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
    return view('templates.dashboard');
});

//Labor
Route::get('/labor', 'LaborController@index');
Route::get('/labor/tambah', 'LaborController@tambah');
Route::post('/labor/store', 'LaborController@store');
Route::get('/labor/edit/{id}', 'LaborController@edit');
Route::put('/labor/update/{id}', 'LaborController@update');
Route::get('/labor/hapus/{id}', 'LaborController@delete');


//Alat
Route::get('/alat', 'AlatController@index');
Route::get('/alat/tambah', 'AlatController@tambah');
Route::post('/alat/store', 'AlatController@store');
Route::get('/alat/edit/{id}', 'AlatController@edit');
Route::put('/alat/update/{id}', 'AlatController@update');
Route::get('/alat/hapus/{id}', 'AlatController@delete');

//Penggunaan
Route::get('/penggunaan', 'PenggunaanController@index');
Route::get('/penggunaan/tambah', 'PenggunaanController@tambah');
Route::post('/penggunaan/store', 'PenggunaanController@store');
Route::get('/penggunaan/edit/{id}', 'PenggunaanController@edit');
Route::put('/penggunaan/update/{id}', 'PenggunaanController@update');
Route::get('/penggunaan/hapus/{id}', 'PenggunaanController@delete');

//Dosen
Route::get('/dosen', 'DosenController@index');
Route::get('/dosen/tambah', 'DosenController@tambah');
Route::post('/dosen/store', 'DosenController@store');
Route::get('/dosen/edit/{id}', 'DosenController@edit');
Route::put('/dosen/update/{id}', 'DosenController@update');
Route::get('/dosen/hapus/{id}', 'DosenController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
