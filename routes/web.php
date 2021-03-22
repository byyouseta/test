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
//Bab 32
Route::get('/session/tampil','TesController@tampilkanSession');
Route::get('/session/buat','TesController@buatSession');
Route::get('/session/hapus','TesController@hapusSession');
//Bab 33 Session flash
Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');
//Bab 34
Route::get('/malasngoding/{nama}','MalasngodingController@index');
//Bab 35
Route::get('/kirimemail','MalasngodingController@index');