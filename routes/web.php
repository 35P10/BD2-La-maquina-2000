<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HomeController;
=======
>>>>>>> 89efe09c75f7376c085fe800791071407d76f5a7

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
<<<<<<< HEAD
Route::get('/empleado/listar',[EmpleadoController::class,'show_all'])->name('show_all');;
Route::get('/buscar',[ClienteController::class,'buscar'])->name('buscar');;
Route::resource('persona', PersonaController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('empleado', EmpleadoController::class);
Route::resource('producto', ProductoController::class);
Route::resource('home', HomeController::class);
=======


Route::get('bien', function () {
    return 'hola';
});

//Router Auth
Route::get('/login','App\Http\Controllers\ConnectController@getLogin')->name('login');

Route::get('/register','App\Http\Controllers\ConnectController@getRegister')->name('register');

Route::post('/register','App\Http\Controllers\ConnectController@postRegister')->name('register');
















                                                                             
                                                                             
                                                                             
                                                                             
                                                                             
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 89efe09c75f7376c085fe800791071407d76f5a7
