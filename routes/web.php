<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Halaman utama (/) langsung menampilkan dashboard tanpa login
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Route Dashboard 1
    Route::get('/dashboard', function () {
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
    })->name('dashboard');

    // Route Dashboard 2
    Route::get('/dashboard2', function () {
        return view('dashboard2');
    })->name('dashboard2');

    // Route Dashboard 3
    Route::get('/dashboard3', function () {
        return view('dashboard3');
    })->name('dashboard3');

});

// Route penampung form 'Tambah Data Baru'
Route::post('/projects', function (Request $request) {
    return redirect()->back()->with('success', 'Data project berhasil disimpan!');
})->name('projects.store')->middleware('auth');

// Route Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

Route::get('/error1', function () {
    return view('error1');
})->name('error1');

Route::get('/error2', function () {
    return view('error2');
})->name('error2');

Route::get('/element', function () {
    return view('element');
});
Route::get('/layout', function () {
    return view('layout');
});

Route::get('/infobox', function () {
    return view('infobox');
});