<?php

use App\Http\Controllers\AgenceController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\ClickController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\FavoriController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\UtilisateurController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('dashboard');

    Route::get('/agence', function () {
        return Inertia::render('Admin/Agence');
    })->name('agence');

    Route::get('/utilisateur', function () {
        return Inertia::render('Admin/Utilisateur');
    })->name('utilisateur');

    Route::get('/nbclick', function () {
        return Inertia::render('Admin/Clicks');
    })->name('nbclick');

    Route::get('/avis', function () {
        return Inertia::render('Admin/Avis');
    })->name('avis');

    Route::get('/favoris', function () {
        return Inertia::render('Admin/Favoris');
    })->name('favoris');
});