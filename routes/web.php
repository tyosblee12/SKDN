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
Route::get('/mahasiswa/edit/{id}','MahasiswaController@editMhs')->name('editmhs');
Route::post('/mahasiswa/update/{id}','MahasiswaController@updateMhs')->name('updatemhs');
Route::post('/mahasiswa/delete/{id}','MahasiswaController@deleteMhs')->name('deletemhs');

// KELAS
Route::get('/kelas','KelasController@index')->name('kelas');
Route::post('/kelas/postkelas','KelasController@postkelas')->name('postkelas');
Route::get('/kelas/edit/{id}','KelasController@editKls')->name('editkls');
Route::post('/kelas/update/{id}','KelasController@updateKls')->name('updatekls');
Route::post('/kelas/delete/{id}','KelasController@deleteKls')->name('deletekls');

// EX
Route::get('/home', 'HomeController@index')->name('home');