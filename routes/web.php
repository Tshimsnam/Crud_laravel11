<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/etudiant',[EtudiantController::class, 'list_etudiant']);