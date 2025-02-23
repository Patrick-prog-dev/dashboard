<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;




Route::get('/welcome', [PageController::class, 'accueil'])->name('welcome');

Route::get('/billing', [PageController::class, 'index'])->name('billing');

Route::get('/tables', [PageController::class, 'table'])->name('tables');

Route::get('/virtual_reality', [PageController::class, 'virtual'])->name('virtual_reality');

Route::get('/rtl', [PageController::class, 'rtll'])->name('rtl');

Route::get('/notifications', [PageController::class, 'notif'])->name('notifications');

Route::get('/profile', [PageController::class, 'profil'])->name('profile');

Route::get('/billing', [PageController::class, 'app'])->name('billing');

Route::get('/dashboard', [PageController::class, 'viewDashboard'])->name('dashboard');

Route::get('/icons', [PageController::class, 'viewIcons'])->name('icons');

Route::get('/landing', [PageController::class, 'viewLanding'])->name('landing');

Route::get('/map', [PageController::class, 'viewMap'])->name('map');

Route::get('/typography', [PageController::class, 'viewTypography'])->name('typography');

Route::get('/sign-in', [PageController::class, 'viewSign_in'])->name('sign-in');

Route::get('/sign-up', [PageController::class, 'viewSign_up'])->name('sign-up');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);


require __DIR__.'/auth.php';


Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');






