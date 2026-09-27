@extends('layouts.app') {{-- Sesuaikan nama master layout Anda --}}

@section('content')
<div class="container my-4">
    <h3>Tambah Data Cast</h3>
    <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Bio</label>
            <textarea name="bio" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection