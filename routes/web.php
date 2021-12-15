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

Route::get('tugas4', function () {
    return view('javascripttugas4');
});

Route::get('prak2', function () {
    return view('praktikum2');
});

Route::get('isiannama',"ViewController@showForm");
Route::post('greetings',"ViewController@resultGreetings");
Route::get('uts',"ViewController@utsForm");
Route::get('palindromeisi', "ViewController@palindromeCheck");
Route::post('checkpalindrome', "ViewController@hasilPalindrome");

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD sepedamotor
Route::get('/sepedamotor','sepedaMotorController@index');
Route::get('/sepedamotor/tambah','sepedaMotorController@tambah');
Route::post('/sepedamotor/store','sepedaMotorController@store');
Route::get('/sepedamotor/edit/{id}','sepedaMotorController@edit');
Route::post('/sepedamotor/update','sepedaMotorController@update');
Route::get('/sepedamotor/hapus/{id}','sepedaMotorController@hapus');
Route::get('/sepedamotor/cari','sepedaMotorController@cari');
Route::get('/sepedamotor/view/{id}','sepedaMotorController@detail');

//route CRUD nilaikuliah
Route::get('/nilaikuliah','nilaiKuliahController@index');
Route::get('/nilaikuliah/tambah','nilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','nilaiKuliahController@store');

