<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
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

Route::get('/livre', [LivreController::class, 'index']);
Route::get('/livre/create', [LivreController::class, 'create']);
Route::post('/livre/store', [LivreController::class, 'store']);
Route::get('/livre/{library}', [LivreController::class, 'show']);
Route::get('/livre/{library}/edit', [LivreController::class, 'edit']);
Route::put('/livre/{library}', [LivreController::class, 'update']);
Route::delete('/livre/{library}', [LivreController::class, 'destroy']);
