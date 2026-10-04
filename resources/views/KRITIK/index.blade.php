@extends('layouts.app')

@section('title', 'Daftar Kritik')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Manajemen Kritik</h3>
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
                <h3 class="card-title"><i class="bi bi-chat-square-text me-2"></i>Data Kritik Film</h3>
                <a href="{{ route('kritik.create') }}" class="btn btn-primary btn-sm ms-auto">
                    <i class="bi bi-plus-lg me-1"></i> Tambah Kritik
                </a>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>User</th>
                            <th>Film</th>
                            <th>Isi Kritik</th>
                            <th>Poin</th>
                            <th>Tanggal Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($kritiks as $key => $kritik)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $kritik->user->name ?? '-' }}</td>
                                <td>{{ $kritik->film->judul ?? '-' }}</td>
                                <td>{{ $kritik->content }}</td>
                                <td><span class="badge bg-warning text-dark">{{ $kritik->point }} / 5</span></td>
                                <td>{{ $kritik->created_at ? $kritik->created_at->format('d M Y') : '-' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    Belum ada data kritik. Klik tombol <strong>Tambah Kritik</strong> untuk mengisi data.
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