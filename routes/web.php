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
