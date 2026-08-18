<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    // Menyiapkan SELURUH variabel yang dipanggil di dashboard.blade.php
    $totalData = 0; 
    $totalSelesai = 0;
    $totalProses = 0;
    $totalPending = 0;
    $projects = collect(); // Mengirimkan koleksi data kosong agar tabel tidak error

    return view('dashboard', compact(
        'totalData', 
        'totalSelesai', 
        'totalProses', 
        'totalPending', 
        'projects'
    ));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route penampung form 'Tambah Data Baru' agar tombol Simpan Data tidak error
Route::post('/projects', function (Request $request) {
    return redirect()->back()->with('success', 'Data project berhasil disimpan!');
})->name('projects.store')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';