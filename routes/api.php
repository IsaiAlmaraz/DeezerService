<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ArtistaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/Generos', [GenreController::class,'obtenerGeneros'])->name("obtener.generos");
Route::get('/Generos/{id}', [GenreController::class,'encontrarGenero']);
Route::get('/TodosGeneros', [GenreController::class,'encontrarTodos']);
Route::get('/Artista/{id}', [ArtistaController::class, 'ObtenerArtista']);

