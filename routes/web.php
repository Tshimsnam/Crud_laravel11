<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/etudiant',[EtudiantController::class, 'list_etudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);