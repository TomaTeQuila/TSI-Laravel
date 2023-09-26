<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HubController;
use App\Http\Controllers\UsuariosController;

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

Route::get('/',[HubController::class,'index'])->name('hub.index');
Route::get('/register',[HubController::class,'register'])->name('hub.register');
Route::get('/login',[HubController::class,'login'])->name('hub.login');
Route::post('/register', [HubController::class,'store'])->name('hub.store');

Route::post('/usuario/login',[UsuariosController::class,'autenticar'])->name('usuario.login');
Route::get('/cuenta/logout',[UsuariosController::class,'logout'])->name('usuario.logout');