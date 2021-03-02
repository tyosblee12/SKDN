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
Route::get('/dashboard', 'AuthController@dashboard')->name('dashboard');

// EX
Route::get('/home', 'HomeController@index')->name('home');