@extends('layouts.app')

@section('title', 'Daftar Genre')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Manajemen Genre</h3>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title"><i class="bi bi-tags me-2"></i>Data Genre Film</h3>
                <a href="{{ route('genre.create') }}" class="btn btn-primary btn-sm ms-auto">
                    <i class="bi bi-plus-lg me-1"></i> Tambah Genre Baru
                </a>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Genre</th>
                            <th>Tanggal Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($genres as $key => $genre)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td><strong>{{ $genre->nama }}</strong></td>
                                <td>{{ $genre->created_at ? $genre->created_at->format('d M Y') : '-' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted py-4">
                                    Belum ada data genre. Klik tombol <strong>Tambah Genre Baru</strong> untuk mengisi data.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection