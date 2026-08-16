<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Route untuk menampilkan Halaman Dashboard
Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route untuk menyimpan data dari Form Modal
Route::post('/projects/store', [DashboardController::class, 'store'])->name('projects.store');