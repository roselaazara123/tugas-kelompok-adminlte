@extends('layouts.app')

@section('title', 'Daftar Film')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Manajemen Film</h3>
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
                <h3 class="card-title"><i class="bi bi-film me-2"></i>Data Film</h3>
                <a href="{{ route('film.create') }}" class="btn btn-primary btn-sm ms-auto">
                    <i class="bi bi-plus-lg me-1"></i> Tambah Film
                </a>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    @forelse($films as $film)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="film-card">
                            <div class="film-poster">
                                @if($film->poster)
                                    <img src="{{ asset('storage/' . $film->poster) }}" alt="{{ $film->judul }}">
                                @else
                                    <div class="film-poster-placeholder">
                                        <i class="bi bi-film"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="film-info">
                                <h6 class="film-title mb-0" title="{{ $film->judul }}">{{ $film->judul }}</h6>
                                <small class="text-muted">{{ $film->tahun }} &bull; {{ $film->genre->nama ?? '-' }}</small>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center text-muted py-4">Belum ada data film</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .film-poster {
        aspect-ratio: 2 / 3;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.25);
        background: #1a1a1a;
    }
    .film-poster img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.2s ease;
    }
    .film-poster:hover img {
        transform: scale(1.05);
    }
    .film-poster-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #555;
        font-size: 2rem;
    }
    .film-title {
        margin-top: 0.5rem;
        font-size: 0.9rem;
        font-weight: 600;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
@endsection