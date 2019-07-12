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

/// Pelanggan
Route::get('/pelanggan','PelangganController@index');
Route::get('/pelanggan/tambah','PelangganController@tambah');
Route::get('/pelanggan/hapus/{kode_plgn}','PelangganController@hapus');
Route::get('/pelanggan/edit/{kode_plgn}','PelangganController@edit');
Route::put('/pelanggan/update/{kode_plgn}','PelangganController@update');
Route::post('/pelanggan/simpan','PelangganController@simpan');