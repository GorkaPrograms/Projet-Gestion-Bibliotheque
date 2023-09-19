<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
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

Route::get('/libraries', [LibraryController::class, 'index'])->name('libraries.index');
Route::get('/libraries/create', [LibraryController::class, 'create'])->name('libraries.create');
Route::post('/libraries', [LibraryController::class, 'store'])->name('libraries.store');
Route::get('/libraries/{library}', [LibraryController::class, 'show'])->name('libraries.show');
Route::get('/libraries/{library}/edit', [LibraryController::class, 'edit'])->name('libraries.edit');
Route::put('/libraries/{library}', [LibraryController::class, 'update'])->name('libraries.update');
Route::delete('/libraries/{library}', [LibraryController::class, 'destroy'])->name('libraries.delete');
