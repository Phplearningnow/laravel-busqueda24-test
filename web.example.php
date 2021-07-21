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
    return view('welcome');
});

Route::get('anuncios', function () {
    return 'anuncios disponibles';
})->name('inicio.anuncios');

Route::get('anuncios/crear', function () {
    return 'crea tu anuncio aqui';
})->name('crea.anuncios');

//Route::get('anuncios/{anuncio}/crear', function() {
  //  return 'crea tu anuncio aqui';
//})->name('crea.anuncios');

//despues de crear el anuncio lo guardamos
Route::post('anuncios', function () {
    //
})->name('almacen.anuncios');

Route::get('anuncios/{anuncio}', function ($anuncio) {
    //enviar notification
    //replicar duplicar
    //agregar boton
    return "muestra anuncio {$anuncio}";
})->name('muestra.anuncios');

Route::get('anuncios/{anuncio}/editar', function ($anuncio) {
    return "editar anuncio {$anuncio}";
})->name('editar.anuncios');
//despues de editar el anuncio lo actualizamos
Route::match(['put', 'patch'], 'anuncios/{anuncio}', function ($anuncio) {
    //
})->name('anuncios.actualizar');

Route::delete('anuncios/{anuncio}', function ($anuncio) {
    //
})->name('anuncios.eliminar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
