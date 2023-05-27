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

//route halaman utama
Route::get('/stok-barang','JaketController@index');

//route CRUD
Route::get('/stok-barang/tambah','JaketController@tambah');

Route::post('/stok-barang/store','JaketController@store');

Route::get('/stok-barang/edit/{id}','JaketController@edit');

Route::post('/stok-barang/update','JaketController@update');

Route::get('/stok-barang/hapus/{id}','JaketController@hapus');

//route pencarian
Route::get('/stok-barang/cari','JaketController@cari');

//route Validasi
Route::get('/input', 'ValidasiCekController@input');

Route::post('/proses', 'ValidasiCekController@proses');
