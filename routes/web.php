<?php

use App\Http\Controllers\BarrilesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EdicionController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\ImgController;
use App\Http\Controllers\PlatinadoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController:: class, 'index'] )->name('welcome');
Route::get('/register', [RegisterController:: class, 'index'] )-> name('register');
Route::post('/register', [RegisterController:: class, 'store'] );

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/{user:username}/menu', [MenuController::class, 'index'])->name('menu.index');


Route::get('/{user:username}/registro',[RegistroController::class,'index'])->name('registro');
Route::get('/{user:username}/consulta',[ConsultaController::class,'index'])->name('consulta');
Route::get('/{user:username}/edicion',[EdicionController::class,'index'])->name('edicion');

Route::get('/{user:username}/platinado',[PlatinadoController::class,'index'])->name('platinado');
Route::post('/{user:username}/platinado',[PlatinadoController::class,'store']);


Route::get('/{user:username}/barriles',[BarrilesController::class,'index'])->name('barriles');
Route::post('/{user:username}/img',[ImgController::class,'store'])->name('img.store');

