<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Livewire\Posts;




#Route::resource('pasien', PasienController::class);
// Route::get('profil', [ProfilController::class, 'index']);
// Route::get('profil/create', [ProfilController::class, 'create'])->name('profil.create');
// Route::get('profil/{nama}/{id}/edit', [ProfilController::class, 'edit']);

// Route::get('profil', function () {
//     return 'Hallo saya belakar laravel';
// });
Route::get('posts', Posts::class)->middleware('auth');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
