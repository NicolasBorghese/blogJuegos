<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('noticias/create', [NoticiaController::class, 'create'])->name('noticias.create');
Route::get('noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');
Route::get('noticias/{noticia}/edit', [NoticiaController::class, 'edit'])->name('noticias.edit');
Route::post('noticias', [NoticiaController::class, 'store'])->name('noticias.store');
Route::put('noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticias.update');

Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::get('reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
Route::get('reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::put('reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');

Route::get('cuenta/registrarse', [CuentaController::class, 'registrarse'])->name('cuenta.registrarse');
Route::post('cuenta/registrarse', [CuentaController::class, 'store'])->name('cuenta.store');
Route::get('cuenta/ingresar', [CuentaController::class, 'ingresar'])->name('cuenta.ingresar');
Route::post('cuenta', [CuentaController::class, 'login'])->name('cuenta.login');
Route::get('cuenta', [CuentaController::class, 'logout'])->name('cuenta.logout');
Route::get('cuenta/edit', [CuentaController::class, 'edit'])->name('cuenta.edit');
Route::put('cuenta/{id}/edit', [CuentaController::class, 'update'])->name('cuenta.update');
Route::get('cuenta/users', [CuentaController::class, 'users'])->name('cuenta.users');
Route::get('cuenta/reviews', [CuentaController::class, 'reviews'])->name('cuenta.reviews');
Route::get('cuenta/noticias', [CuentaController::class, 'noticias'])->name('cuenta.noticias');

Route::post('comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');
