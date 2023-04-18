<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;

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

header('Access-Control-Allow-Origin: *'); 

Route::get("/get_values_json", "App\Http\Controllers\LivrosController@get_values_json");

Route::get('/', "App\Http\Controllers\LivrosController@mostrar_livros")->name("mostrar_livros");

Route::get('/about', "App\Http\Controllers\LivrosController@about")->name("about");

Route::get('/contato', "App\Http\Controllers\LivrosController@contato")->name("contato");

Route::get('/anuncios', "App\Http\Controllers\LivrosController@anuncios")->name("anuncios");

Route::get('/criar_usuario', "App\Http\Controllers\LivrosController@criar_usuario")->name("criar_usuario");

Route::get('/livro/add_livro', "App\Http\Controllers\LivrosController@add_livro")->name("add_livro");
Route::post('/livro/save', "App\Http\Controllers\LivrosController@save_livro")->name("save_livro");

Route::get('/livro/consultar', "App\Http\Controllers\LivrosController@consultar_livro")->name("consultar_livro");
Route::post('/livro/filtrar', "App\Http\Controllers\LivrosController@filtrar_livro")->name("filtrar_livro");



