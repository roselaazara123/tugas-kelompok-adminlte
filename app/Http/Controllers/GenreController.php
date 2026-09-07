<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // READ: Menampilkan semua data genre di tabel
    public function index()
    {
        $genres = Genre::all();
        return view('genre.index', compact('genres'));
    }

    // CREATE: Menampilkan halaman form input genre
    public function create()
    {
        return view('genre.create');
    }

    // STORE: Menyimpan data yang diketik dari form ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
        ]);

        Genre::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('genre.index')->with('success', 'Genre berhasil ditambahkan!');
    }
}