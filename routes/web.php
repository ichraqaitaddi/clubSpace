<?php
use App\Http\Controllers\ClubController;
use App\Http\Controllers\HomeClubController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\MembreController;
=======
use App\Http\Controllers\EvenementController;
>>>>>>> imadV
=======
use App\Http\Controllers\EvenementController;
>>>>>>> imadV

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






// Route pour la page d'accueil
Route::get('/', function () {
    return view('index');
})->name('index');



// Route pour les clubs
Route::get('/clubs', function () {
    return view('clubs.index');
})->name('clubs.index');

Route::resource('clubs',App\Http\Controllers\ClubController::class);

Route::get('/homeclub', [HomeClubController::class, 'index'])->name('homeClub.index');

<<<<<<< HEAD
<<<<<<< HEAD

Route::get('/nav',function (){
    return view('components.navbar.cart');
});

//pour afficher details dun club
Route::get('/homeclub/{id}', [HomeClubController::class, 'show'])->name('homeClub.infoclub');

//espace crud member
Route::resource('members', MembreController::class);

//login
=======
=======
>>>>>>> imadV
Route::resource('evenements', EvenementController::class);
 
Route::get('/env', [EvenementController::class, 'cartE'])->name('evenements.cartE');
   
<<<<<<< HEAD
>>>>>>> imadV
=======
>>>>>>> imadV
