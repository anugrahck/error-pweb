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
//memanggil method get pada Object Route NamaObject::nama_method
Route::get('/welcome', function(){
    return view('welcome'); //menampilkan file dengan nama welcome.blade.php yang ada di folder public
})->name('welcome');

Route::get('/halo', function(){return view('coba'); })->name('halo') ;

Route::get('web','PegawaiController@coba') ;

Route::get('pegawai','PegawaiController@index') ;

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
