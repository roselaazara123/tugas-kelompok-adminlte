<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data langsung dari database tabel projects
        $projects = DB::table('projects')->orderBy('created_at', 'desc')->get();

        $totalData = $projects->count();
        $totalSelesai = $projects->where('status', 'Selesai')->count();
        $totalProses = $projects->where('status', 'Dalam Proses')->count();
        $totalPending = $projects->where('status', 'Pending')->count();

        return view('dashboard', compact('projects', 'totalData', 'totalSelesai', 'totalProses', 'totalPending'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_project' => 'required|string|max:255',
            'kategori'     => 'required|string|max:100',
            'status'       => 'required|in:Selesai,Dalam Proses,Pending',
        ]);

        // Menyimpan data langsung ke tabel projects
        DB::table('projects')->insert([
            'nama_project' => $request->nama_project,
            'kategori'     => $request->kategori,
            'status'       => $request->status,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        return redirect()->back()->with('success', 'Data project berhasil ditambahkan!');
    }
}