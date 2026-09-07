<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Ditambahkan untuk menggunakan Query Builder

class CastController extends Controller
{
    /**
     * Display a listing of the resource. (READ)
     */
    public function index()
    {
        // Mengambil semua data dari tabel 'cast'
        $cast = DB::table('cast')->get();

        // Mengembalikan tampilan index beserta data cast
        return view('cast.index', compact('cast'));
    }

    /**
     * Show the form for creating a new resource. (CREATE)
     */
    public function create()
    {
        // Menampilkan form penambahan data
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage. (CREATE)
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'bio'  => 'required',
        ]);

        // Menyimpan data ke tabel 'cast' menggunakan Query Builder
        DB::table('cast')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio'  => $request->bio,
        ]);

        // Mengarahkan kembali ke halaman index setelah berhasil menyimpan
        return redirect()->route('cast.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}