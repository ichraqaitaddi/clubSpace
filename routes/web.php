<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------|
| Web Routes
|--------------------------------------------------------------------------|
*/

Route::get('/', function () {
    return view('index');
});

// Route pour les clubs
Route::get('/clubs', function () {
    return view('index');
})->name('clubs');

// Route pour la page "Nous rejoindre"
Route::get('/nous-rejoindre', function () {
    return view('index');
})->name('nous_rejoindre');

// Routes pour les événements
Route::get('/events', [EventController::class, 'index'])->name('events.index');  // Afficher la liste des événements
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');  // Afficher le formulaire de création
Route::post('/events', [EventController::class, 'store'])->name('events.store');  // Créer un événement
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');  // Afficher un événement spécifique
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');  // Formulaire d'édition
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');  // Mettre à jour un événement
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');  // Supprimer un événement
