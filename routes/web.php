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


Route::get('bien', function () {
    return 'hola';
});

//Router Auth
Route::get('/login','App\Http\Controllers\ConnectController@getLogin')->name('login');

Route::get('/register','App\Http\Controllers\ConnectController@getRegister')->name('register');

Route::post('/register','App\Http\Controllers\ConnectController@postRegister')->name('register');
















                                                                             
                                                                             
                                                                             
                                                                             
                                                                             
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
