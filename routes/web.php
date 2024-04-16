<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantControlleur;

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
Route::get("/update_etudiant/{id}", [EtudiantControlleur::class, "update_etudiant"]);
Route::delete("/delete_etudiant/{id}", [EtudiantControlleur::class, "delete_etudiant"]);
Route::get("/", [EtudiantControlleur::class,"liste_etudiant"]);
Route::get("/ajouter", [EtudiantControlleur::class,"ajouter_etudiant"]);
Route::post("/ajouter/traitement", [EtudiantControlleur::class,"ajouter_etudiant_traitement"]);
Route::post("/update/traitement", [EtudiantControlleur::class, "update_etudiant_traitement"]);
