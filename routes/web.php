<?php

use App\Http\Controllers\ModeReglementsController;
// use App\Models\Famille;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\MarquesController;
use App\Http\Controllers\UserController;
<<<<<<< HEAD
use App\Http\Controllers\UnitesController;
=======
use App\Http\Controllers\CommandeController;
>>>>>>> ee967bf281b773f4071e1ab4c15ae662d7df57da



use App\Http\Controllers\EtatController;

Route::get('/etats', [EtatController::class, 'index'])->name('etats.index');
Route::get('/etats/create', [EtatController::class, 'create'])->name('etats.create');
Route::post('/etats', [EtatController::class, 'store'])->name('etats.store');
Route::get('/etats/{etat}', [EtatController::class, 'show'])->name('etats.show');
Route::get('/etats/{etat}/edit', [EtatController::class, 'edit'])->name('etats.edit');
Route::put('/etats/{etat}', [EtatController::class, 'update'])->name('etats.update');
Route::delete('/etats/{etat}', [EtatController::class, 'destroy'])->name('etats.destroy');




Route::get('/', [UserController::class, 'index']);

Route::resource('familles', FamilleController::class);
Route::resource('user', UserController::class);
Route::post('/user/update', [UserController::class, 'updat'])->name('user.updat');
Route::post('/user/logout', [UserController::class, 'logout'])->name('user.logout');


//Familles
Route::get('/familles', [FamilleController::class, 'index'])->name('familles.index');
Route::get('/familles/create', [FamilleController::class, 'create'])->name('familles.create');
Route::post('/familles', [FamilleController::class, 'store'])->name('familles.store');
Route::get('/familles/{famille}', [FamilleController::class, 'show'])->name('familles.show');
Route::get('/familles/{famille}/edit', [FamilleController::class, 'edit'])->name('familles.edit');
Route::put('/familles/{famille}', [FamilleController::class, 'update'])->name('familles.update');
Route::delete('/familles/{famille}', [FamilleController::class, 'destroy'])->name('familles.destroy');
//Marques
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

//Commandes


Route::get('/commandes', [CommandeController::class, 'index'])->name('commandes.index');
Route::get('/commandes/create', [CommandeController::class, 'create'])->name('commandes.create');
Route::post('/commandes', [CommandeController::class, 'store'])->name('commandes.store');
Route::get('/commandes/{commande}', [CommandeController::class, 'show'])->name('commandes.show');
Route::get('/commandes/{commande}/edit', [CommandeController::class, 'edit'])->name('commandes.edit');
Route::put('/commandes/{commande}', [CommandeController::class, 'update'])->name('commandes.update');
Route::delete('/commandes/{commande}', [CommandeController::class, 'destroy'])->name('commandes.destroy');


// Define routes for UnitesController
Route::get('/unites', [UnitesController::class, 'index'])->name('unites.index');
Route::get('/unites', [UnitesController::class, 'index'])->name('unites.index');
Route::get('/unites/create', [UnitesController::class, 'create'])->name('unites.create');
Route::post('/unites', [UnitesController::class, 'store'])->name('unites.store');
Route::get('/unites/{id}', [UnitesController::class, 'show'])->name('unites.show');
Route::get('/unites/{id}/edit', [UnitesController::class, 'edit'])->name('unites.edit');
Route::put('/unites/{id}', [UnitesController::class, 'update'])->name('unites.update');
Route::delete('/unites/{id}', [UnitesController::class, 'destroy'])->name('unites.destroy');



