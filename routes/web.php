<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Halaman utama (/) langsung menampilkan dashboard tanpa login
Route::get('/', function () {
    $totalData = 0; 
    $totalSelesai = 0;
    $totalProses = 0;
    $totalPending = 0;
    $projects = collect();

    return view('dashboard', compact(
        'totalData', 
        'totalSelesai', 
        'totalProses', 
        'totalPending', 
        'projects'
    ));
});

// Route penampung form
Route::post('/projects', function (Request $request) {
    return redirect()->back()->with('success', 'Data project berhasil disimpan!');
})->name('projects.store');
// Route dummy logout agar tombol logout di AdminLTE tidak crash
Route::post('/logout', function () {
    return redirect('/');
})->name('logout');
Route::get('/table1', function () {
    return view('table1');
})->name('table1');
Route::get('/datatable', function () {
    return view('datatable');
});
Route::get('/apexcharts', function () {
    return view('apexcharts');
});