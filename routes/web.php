<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Con esto que se pone al lado de resource es como lo van a ver el resto por ejemplo con juegos.index
//Con esto que se pone al lado de resource es como lo van a ver el resto por ejemplo con consolas.index
Route::resource('juegos', App\Http\Controllers\JuegoController::class)->middleware('auth');
Route::resource('consolas', App\Http\Controllers\ConsolaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
