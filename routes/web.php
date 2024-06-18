<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ReviewController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

//Acceso público
Route::get('/', HomeController::class)->name('home');

//Acceso público
Route::get('noticias', [NoticiaController::class, 'index'])->name('noticias.index');

//Solo acceden autores y administradores
Route::middleware(['checkrole:autor,administrador'])->group(function () {
    Route::get('noticias/create', [NoticiaController::class, 'create'])->name('noticias.create');
    Route::get('noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');
    Route::get('noticias/{noticia}/edit', [NoticiaController::class, 'edit'])->name('noticias.edit');
    Route::post('noticias', [NoticiaController::class, 'store'])->name('noticias.store');
    Route::put('noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticias.update');
});

//Acceso público
Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');

//Solo acceden autores y administradores
Route::middleware(['checkrole:autor,administrador'])->group(function () {
    Route::get('reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
    Route::get('reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
    Route::get('reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
    Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::put('reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
});

//Acceso público
Route::get('cuenta/registrarse', [CuentaController::class, 'registrarse'])->name('cuenta.registrarse');
Route::post('cuenta/registrarse', [CuentaController::class, 'store'])->name('cuenta.store');
Route::get('cuenta/ingresar', [CuentaController::class, 'ingresar'])->name('cuenta.ingresar');
Route::post('cuenta', [CuentaController::class, 'login'])->name('cuenta.login');
Route::get('cuenta', [CuentaController::class, 'logout'])->name('cuenta.logout');

//Editar cuenta solo requiere logueo
Route::get('cuenta/edit', [CuentaController::class, 'edit'])->name('cuenta.edit')->middleware(Authenticate::class);
//Solo puede accederse con autentiación previa
Route::put('cuenta/{id}/edit', [CuentaController::class, 'update'])->name('cuenta.update');

//Solo pueden acceder administradores
Route::middleware(['checkrole:administrador'])->group(function () {
    Route::get('cuenta/users', [CuentaController::class, 'users'])->name('cuenta.users');
});

//Solo acceden autores y administradores
Route::middleware(['checkrole:autor,administrador'])->group(function () {
    Route::get('cuenta/reviews', [CuentaController::class, 'reviews'])->name('cuenta.reviews');
    Route::get('cuenta/noticias', [CuentaController::class, 'noticias'])->name('cuenta.noticias');
});

//Solo puede accederse con autentiación previa
Route::post('comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');
