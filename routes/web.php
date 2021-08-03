<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HomeController;

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
Route::get('/empleado/listar',[EmpleadoController::class,'show_all'])->name('show_all');;
Route::get('/buscar',[ClienteController::class,'buscar'])->name('buscar');;
Route::resource('persona', PersonaController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('empleado', EmpleadoController::class);
Route::resource('producto', ProductoController::class);
Route::resource('home', HomeController::class);
