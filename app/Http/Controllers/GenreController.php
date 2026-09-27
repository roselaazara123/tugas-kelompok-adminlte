<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return view('genre.index', compact('genres'));
    }

    public function create()
    {
        return view('genre.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:genre,nama',
        ], [
            'nama.required' => 'Nama genre wajib diisi!',
            'nama.unique'   => 'Nama genre ini sudah ada di database.',
            'nama.max'      => 'Nama genre maksimal 255 karakter.',
        ]);

        Genre::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('genre.index')->with('success', 'Genre berhasil ditambahkan!');
    }
}