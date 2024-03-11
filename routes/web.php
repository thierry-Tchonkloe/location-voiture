<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\VoituresController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/creerVoiture',VoituresController::class);
    Route::get('/validation', function () {
        return view('validation');
    });

});

//Route::get('/index', [ClientsController::class, 'index'])->name('client.index');

Route::post('/connexion', [VoituresController::class, 'connexion'])->name('client.connexion');

Route::get('/connexion/{#register}', [ClientsController::class, 'connexion_register']);
Route::get('/connexion{#login}', [ClientsController::class, 'connexion_login']);

//Route pour contact
Route::get('/contact', [VoituresController::class, 'contact'])->name('contact.create');
//Route pour reservation
Route::get('/reservation', [VoituresController::class, 'reservation'])->name('reservation.create');


Route::get('/espace-membre', function () { return view('espacemembre'); });


// Route::get('/NosVoiture', function () {
//     return view('NosVoiture');

// });
Route::get('/NosVoiture', [VoituresController::class, 'nosVoitures'])->name('voitures.listes');


// Route::get('/reservation', function () {
//     return view('reservation');
// });

Route::get('/reçu', function () {
    return view('reçu');
});




require __DIR__.'/auth.php';