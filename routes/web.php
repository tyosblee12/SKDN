<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// LOGIN
Auth::routes();
Route::get('/', 'AuthController@index')->name('login');
Route::post('/signin', 'AuthController@sendLoginRequest')->name('ceklogin');
Route::get('/dashboard', 'DashboardController@index' )->name('dashboard');

// MAHASISWA
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/tambah', 'MahasiswaController@tambahmhs')->name('tambahmhs');
Route::post('/mahasiswa/post','MahasiswaController@postmhs')->name('postmhs');

// EX
Route::get('/home', 'HomeController@index')->name('home');