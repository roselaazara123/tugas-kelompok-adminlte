@extends('layouts.app')

@section('title', 'Tambah Film')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Tambah Film</h3>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title"><i class="bi bi-film me-2"></i>Form Tambah Film</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('film.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{ old('judul') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <input type="number" name="tahun" class="form-control" value="{{ old('tahun') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Genre</label>
                        <select name="genre_id" class="form-control">
                            <option value="">-- Pilih Genre --</option>
                            @foreach($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ringkasan</label>
                        <textarea name="ringkasan" class="form-control" rows="4">{{ old('ringkasan') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('film.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection