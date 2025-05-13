<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Route dashboard sesuai level, hanya bisa diakses oleh user dengan level yang sesuai
Route::middleware(['auth', 'verified', 'level:beginner'])->get('/dashboard/beginner', [DashboardController::class, 'beginner'])->name('dashboard.beginner');

Route::middleware(['auth', 'verified', 'level:intermediate'])->get('/dashboard/intermediate', [DashboardController::class, 'intermediate'])->name('dashboard.intermediate');

Route::middleware(['auth', 'verified', 'level:advanced'])->get('/dashboard/advanced', [DashboardController::class, 'advanced'])->name('dashboard.advanced');

// Default route /dashboard redirect ke dashboard sesuai level user
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    $user = auth()->user();
    return match ($user->level) {
        'beginner' => redirect()->route('dashboard.beginner'),
        'intermediate' => redirect()->route('dashboard.intermediate'),
        'advanced' => redirect()->route('dashboard.advanced'),
        default => abort(403, 'Unknown level')
    };
})->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
