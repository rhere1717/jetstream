<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PasienController;

Route::resource('pasien', PasienController::class);
Route::get('profil', [ProfilController::class, 'index']);
Route::get('profil/create', [ProfilController::class, 'create']) ->name('profil.create');
Route::get('profil/{nama}/{id}/edit', [ProfilController::class, 'edit']);

// Route::get('profil', function () {
//     return 'Hallo saya belakar laravel';
// });
