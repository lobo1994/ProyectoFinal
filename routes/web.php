<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [InicioController::class, 'getIndex']);
Route::get('/login', [InicioController::class, 'login'])->name('formLogin');
Route::post('/loggin', [LoginController::class, 'loginUser'])->name('loginUsuario');
Route::get('/registro', [InicioController::class, 'registro'])->name('formRegistro');
Route::post('/registros', [LoginController::class, 'registroUser'])->name('registroUsuario');