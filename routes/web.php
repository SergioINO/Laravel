<?php

use Illuminate\Support\Facades\Route;

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

    if(Auth::check()){
           return redirect()->route('indexpeliculas');

    }
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// si no se especifica el metodo por defecto tomara el index
//listar peliculas
Route::get('peliculas',[App\Http\Controllers\PeliculaController::class, 'index'])->name('indexpeliculas');

//eliminar peliculas
Route::post('eliminar_peliculas',[App\Http\Controllers\PeliculaController::class, 'destroy'])->name('peliculas.destroy');

//editar peliculas
Route::get('/peliculas/{id}/edit',[App\Http\Controllers\PeliculaController::class, 'edit'])->name('peliculas.edit');

//actualizar pelicula
Route::post('actualizar_peliculas',[App\Http\Controllers\PeliculaController::class, 'update'])->name('peliculas.update');

//Formulario Pelicula; al momento de agregar tengo que hacer un get y un post
Route::get('/peliculas/create',[App\Http\Controllers\PeliculaController::class, 'create']);
//Boton guardar pelicula al crear una pelicula
Route::post('crear_peliculas',[App\Http\Controllers\PeliculaController::class, 'store'])->name('crearpeliculas');

