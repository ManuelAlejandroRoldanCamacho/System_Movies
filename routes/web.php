<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\MoviesCategoriesController;
use App\Http\Controllers\CategoriesController;

use Illuminate\Support\Facades\Route;


/* Rutas Generales */
Route::get('/search_movie', [MoviesController::class, 'search_movie'])->name('search');

Route::get('/', [MoviesController::class, 'index'])->name('home'); 

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisterUserController::class, 'store']);

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


/* Rutas Especificas por modelo Movie */
Route::resource('movies', MoviesController::class, [

    'names' => 'movies',
    'parameters' => ['movies' => 'id_movie'],

])->except([
    'index' 
]);

Route::get('/all_movies', [MoviesController::class, 'all_movies'])->name('movies.all');

/* Rutas Especificas por modelo Categories */

Route::get('categories/index', [CategoriesController::class, 'index'])->name('category.index'); 

Route::resource('categories', CategoriesController::class, [

    'names' => 'category',
    //'parameters' => ['categories' => 'category'],

])->except([
    'index' 
]);


/* Rutas Especificas por modelo Category_Movies */
Route::post('categories_movies/{movie}', [MoviesCategoriesController::class, 'category_modification'])->name('category_movie.modification');



/* Pendinte la ruta de Usuarios, Favoritos y Ver mas tarde */
