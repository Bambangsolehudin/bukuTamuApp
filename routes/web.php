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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tamu/send/{id}', 'TamuController@send')->name('tamu.send');
Route::get('/laporan', 'TamuController@laporan')->name('laporan');
Route::post('/laporan', 'TamuController@createlaporan')->name('laporan.create');


Route::resource('tamu', 'TamuController');
Route::resource('front', 'frontController');
Route::resource('user', 'UserController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
