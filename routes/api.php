<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MediaGenreController;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource("movies", MovieController::class)->except(['create', 'edit']);

Route::get('mediagenre', [ MediaGenreController::class, 'index']);
Route::get('genre', [ GenreController::class, 'index']);


Route::get('users/{id}', [ UserController::class, 'show']);
Route::get('users/{id}/movies', [ UserController::class, 'showUserMovies']);
Route::get('users/{id}/tv-shows', [ UserController::class, 'showUserTvShows']);
Route::post('users', [ UserController::class, 'store']);

Route::post('users/{id}/add-movie',[ UserController::class, 'addMovieToFavorite']);
