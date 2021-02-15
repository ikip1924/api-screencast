<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Screencast\PlaylistController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('playlists')->middleware('permission:create playlists')->group(function () {
        Route::get('create', [PlaylistController::class, 'create'])->name('playlists.create');
        Route::post('create', [PlaylistController::class, 'store']);
        Route::get('table', [PlaylistController::class, 'table'])->name('playlists.table');
    });
});

require __DIR__ . '/auth.php';
