<?php

use App\Http\Controllers\ModeReglementsController;
use App\Models\Famille;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\MarquesController;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index']);

Route::resource('familles', FamilleController::class);
Route::resource('user', UserController::class);
Route::post('/user/update', [UserController::class, 'updat'])->name('user.updat');
Route::post('/user/logout', [UserController::class, 'logout'])->name('user.logout');




//Marque
Route::get('/marques', [MarquesController::class, 'index'])->name('marques.index');
Route::get('/marques/create', [MarquesController::class, 'create'])->name('marques.create');
Route::post('/marques', [MarquesController::class, 'store'])->name('marques.store');
Route::get('/marques/{marque}', [MarquesController::class, 'show'])->name('marques.show');
Route::get('/marques/{marque}/edit', [MarquesController::class, 'edit'])->name('marques.edit');
Route::put('/marques/{marque}', [MarquesController::class, 'update'])->name('marques.update');
Route::delete('/marques/{marque}', [MarquesController::class, 'destroy'])->name('marques.destroy');


//ModeReglements

Route::get('/mode-reglements', [ModeReglementsController::class, 'index'])->name('mode_reglements.index');
Route::get('/mode-reglements/create', [ModeReglementsController::class, 'create'])->name('mode_reglements.create');
Route::post('/mode-reglements', [ModeReglementsController::class, 'store'])->name('mode_reglements.store');
Route::get('/mode-reglements/{modeReglement}', [ModeReglementsController::class, 'show'])->name('mode_reglements.show');
Route::get('/mode-reglements/{modeReglement}/edit', [ModeReglementsController::class, 'edit'])->name('mode_reglements.edit');
Route::put('/mode-reglements/{modeReglement}', [ModeReglementsController::class, 'update'])->name('mode_reglements.update');
Route::delete('/mode-reglements/{modeReglement}', [ModeReglementsController::class, 'destroy'])->name('mode_reglements.destroy');


