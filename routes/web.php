<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ReviewController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

//Acceso público
Route::get('/', HomeController::class)->name('home');

//ATENCIÓN: Problemas con las rutas create de noticias y reviews
//Al colocar el crear noticias despues de la ruta get de noticias.show me da error 404
//Pero si lo coloco antes no...
Route::get('noticias/create', [NoticiaController::class, 'create'])->name('noticias.create')->middleware(['checkrole:autor,administrador']);
Route::get('reviews/create', [ReviewController::class, 'create'])->name('reviews.create')->middleware(['checkrole:autor,administrador']);

//Acceso público
Route::get('noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');
//Solo acceden autores y administradores
Route::middleware(['checkrole:autor,administrador'])->group(function () {
    //Route::get('noticias/create', [NoticiaController::class, 'create'])->name('noticias.create');
    Route::get('noticias/{noticia}/edit', [NoticiaController::class, 'edit'])->name('noticias.edit');
    Route::post('noticias', [NoticiaController::class, 'store'])->name('noticias.store');
    Route::put('noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticias.update');
});

//Acceso público
Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
//Solo acceden autores y administradores
Route::middleware(['checkrole:autor,administrador'])->group(function () {
    //Route::get('reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
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


/*/=======================================================================================\*\
||                                    ORDEN DE LAS RUTAS                                   ||
\*\=======================================================================================/*/

/*El orden en que defines las rutas en Laravel puede afectar cómo se resuelven, y puede provocar errores 404 si no se hace correctamente. Esto es especialmente importante cuando tienes rutas con parámetros que podrían coincidir con rutas sin parámetros.

Orden Correcto de Rutas
Cuando defines rutas en Laravel, las rutas más específicas deben ir antes de las rutas más generales. Esto es porque Laravel evalúa las rutas en el orden en que están definidas y asigna la primera ruta que coincide con la solicitud actual.

Ejemplo Correcto
En tu caso, las rutas como noticias/create y reviews/create deben estar antes de las rutas que tienen parámetros como noticias/{noticia} y reviews/{review} para evitar conflictos.*/
