<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;



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

 

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');  /*  La route entra in PublicController scritto nell'array e di entrare nella classe: 'homepage'  */
Route::get('/about-us', [PublicController::class, 'about_us'])->name('about_us');                         
Route::get('/where', [PublicController::class, 'where'])->name('where');   

//rotte per visualizzare e far partire le email
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-email', [PublicController::class, 'send_emails'])->name('email');


//rotte per la creazione dei movies e show movies
Route::get('movie/create', [MovieController::class, 'create'])->name('movie.create'); // visualizzo il form     
Route::post('movie/store', [MovieController::class, 'store'])->name('movie.store');  // gestisco i dati che arrivano dal form


//rotte parametrica per vedere le card dei film nel dettaglio
Route::get('movie/index', [MovieController::class, 'index'])->name('movie.index');
Route::get('/movies/show/{movie}', [MovieController::class, 'show'])->name('movie.show');    

//rotte per editare o rimuovere card

Route::get('/movies/edit/{movie}', [MovieController::class, 'edit'])->name('movie.edit');    
// rotta per entare nella modifica del partendo da movie.show con i dati gia al suo interno

Route::put('movie/update/{movie}', [MovieController::class, 'update'])->name('movie.update');
//rotta al click del bottone in update di movie.edit - mi permette di gestire i dati dal form

Route::delete('movie/delete/{movie}', [MovieController::class, 'delete'])->name('movie.delete');

