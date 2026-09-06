<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        $totalData = 0; 
        $totalSelesai = 0;
        $totalProses = 0;
        $totalPending = 0;

        return view('dashboard', compact(
            'totalData', 
            'totalSelesai', 
            'totalProses', 
            'totalPending'
        ));
    })->name('dashboard');

    Route::get('/dashboard2', function () {
        return view('dashboard2');
    })->name('dashboard2');

    Route::get('/dashboard3', function () {
        return view('dashboard3');
    })->name('dashboard3');

    Route::get('/infobox', function () {
        return view('infobox');
    })->name('infobox');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/table1', function () {
        return view('table1');
    })->name('table1');

    Route::get('/datatable', function () {
        return view('datatable');
    });

    Route::get('/apexcharts', function () {
        return view('apexcharts');
    });

    Route::get('/mailbox', function () {
        return view('mailbox');
    });

    Route::get('/read', function () {
        return view('read');
    });

    Route::get('/compose', function () {
        return view('compose');
    });

    Route::post('/projects', function (Request $request) {
        return redirect()->back()->with('success', 'Data project berhasil disimpan!');
    })->name('projects.store');

    Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
    Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');
    Route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
});

require __DIR__.'/auth.php';