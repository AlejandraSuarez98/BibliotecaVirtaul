<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PrestamoController;


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

Route::get('/libros', [LibroController::class,'index'])
    ->name('libro.index');


Route::get('/libros/{id}', [LibroController::class,'show'])
    ->name('libro.show')
    ->where('id', '[0-9]+');


Route::get('/libros/crear', [LibroController::class,'create'])
    ->name('libro.create');


Route::post('/libros/crear', [LibroController::class,'store'])
    ->name('libro.store');


Route::get('/libros/{id}/editar', [LibroController::class,'edit'])
    ->name('libro.edit')->where('id', '[0-9]+');

Route::put('/libros/{id}/editar', [LibroController::class,'update'])
    ->name('libro.update')->where('id', '[0-9]+');


Route::delete('/libros/{id}/borrar', [LibroController::class,'destroy'])
    ->name('libro.destroy')->where('id', '[0-9]+');

//-------------------------------------------------------------------------------------


Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UsuarioController::class,'index'])
    ->name('usuario.index');


Route::get('/usuarios/{id}', [UsuarioController::class,'show'])
    ->name('usuario.show')
    ->where('id', '[0-9]+');


Route::get('/usuarios/crear', [UsuarioController::class,'create'])
    ->name('usuario.create');


Route::post('/usuarios/crear', [UsuarioController::class,'store'])
    ->name('usuario.store');


Route::get('/usuarios/{id}/editar', [UsuarioController::class,'edit'])
    ->name('usuario.edit')->where('id', '[0-9]+');

Route::put('/usuarios/{id}/editar', [UsuarioController::class,'update'])
    ->name('usuario.update')->where('id', '[0-9]+');


Route::delete('/usuarios/{id}/borrar', [UsuarioController::class,'destroy'])
    ->name('usuario.destroy')->where('id', '[0-9]+');


//-----------------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prestamos', [PrestamoController::class,'index'])
    ->name('prestamo.index');


Route::get('/prestamos/{id}', [PrestamoController::class,'show'])
    ->name('prestamo.show')
    ->where('id', '[0-9]+');


Route::get('/prestamos/crear', [PrestamoController::class,'create'])
    ->name('prestamo.create');


Route::post('/prestamos/crear', [PrestamoController::class,'store'])
    ->name('prestamo.store');


Route::get('/prestamos/{id}/editar', [PrestamoController::class,'edit'])
    ->name('prestamo.edit')->where('id', '[0-9]+');

Route::put('/prestamos/{id}/editar', [PrestamoController::class,'update'])
    ->name('prestamo.update')->where('id', '[0-9]+');


Route::delete('/prestamos/{id}/borrar', [PrestamoController::class,'destroy'])
    ->name('prestamo.destroy')->where('id', '[0-9]+');

