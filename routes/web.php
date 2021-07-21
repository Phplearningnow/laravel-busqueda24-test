<?php

//namespace App\Http\Controllers\Anuncios;

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

Route::get('/anuncios/inicio', 'Anuncios\AnuncioController@inicio')->name('inicio.anuncios');

//ejemplo ruta-controlador #01
//Route::get('/anuncios/inicio', 'Anuncios\AnuncioController@inicio')->name('inicio.anuncios');
//controlador ruta
//namespace App\Http\Controllers\Anuncios;
//public function inicio() {
//    return 'este es la pagina de inicio controllers 02';
//}


//Route::get('/anuncios/crear', 'Anuncios\AnuncioController@crear')->name('crear.anuncios');
//controlador ruta
//Anuncios\AnuncioController
Route::get('/anuncios/crear', 'Anuncios\AnuncioController@crear')->name('crear.anuncios');
//despues de crear el anuncio lo guardamos
Route::get('/anuncios/almacenar', [App\Http\Controllers\Anuncios\AnuncioController::class, 'almacenar'])->name('almacenar.anuncios');

// no funciona-- Route::post('/anuncios/almacenar', 'Anuncios\AnuncioController@almacenar')->name('almacenar.anuncios');

//Route::get('/anuncios', [App\Http\Controllers\Anuncios\AnuncioController::class, 'editar'])->name('editar.anuncios');

Route::get('/anuncios/editar{anuncio}', 'Anuncios\AnuncioController@editar')->name('editar.anuncios');

Route::get('/anuncios/{anuncio}', 'Anuncios\AnuncioController@mostrar')->name('mostrar.anuncios');



//enviar notificacion
//replcoasting
//add button
//return --> retorna la vista

//despues de editar el anuncio lo actualizamos
Route::match(['put', 'patch'], 'anuncios/{anuncio}', 'AnuncioController@actualizar')->name('actualizar.anuncios');

Route::delete('/anuncios/{anuncio}', 'AnuncioController@eliminar')->name('eliminar.anuncios');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/usuarios/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/// blog section

route::get('/blogs', 'BlogsController@inicio')->name('articulo.articulos');