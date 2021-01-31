<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use \App\Http\Controllers\IletisimController;
use \App\Http\Controllers\SifremiUnuttumController;
use App\Http\Controllers\FilmController;

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

Route::get('/', [AnasayfaController::class, 'index'])->name('anasayfa');

Route::get('giris-yap', [LoginController::class, 'index'])->name('login');

Route::get('kayit-ol', [SignupController::class, 'index'])->name('signup');

Route::get('iletisim', [IletisimController::class, 'index'])->name('iletisim');

Route::get('sifremi-sifirla', [SifremiUnuttumController::class, 'index'])->name('sifirla');

Route::get('/{slug_film_adi}',[FilmController::class, 'index'])->name('film');
