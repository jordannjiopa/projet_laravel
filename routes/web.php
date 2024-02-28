<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
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


route::get('/etudiant',[EtudiantController::class,'liste_etudiant']);
route::get('/ajouter',[EtudiantController::class,'ajouter_etudiant']);
route::post('/ajouter/traitement',[EtudiantController::class,'ajouter_etudiant_traitement']);
route::get('/update-etudiant/{id}',[EtudiantController::class,'update_etudiant']);
route::post('/update/traitement',[EtudiantController::class,'update_etudiant_traitement']);
route::get('/delete-etudiant/{id}',[EtudiantController::class,'delete_etudiant']);
route::get('/contact',[ContactController::class,'show'])->name('contact.show');
//route::post('/contact',[ContactController::class,'send'])->name('contact.send');
route::post('/contact/traitement',[ContactController::class,'contact_traitement']);

