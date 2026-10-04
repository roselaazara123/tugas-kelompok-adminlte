@extends('layouts.app')

@section('title', 'Tambah Kritik')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Tambah Kritik Baru</h3>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Input Kritik</h3>
                    </div>
                    <form action="{{ route('kritik.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="user_id" class="form-label">User</label>
                                <select name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror">
                                    <option value="">-- Pilih User --</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="film_id" class="form-label">Film</label>
                                <select name="film_id" id="film_id" class="form-control @error('film_id') is-invalid @enderror">
                                    <option value="">-- Pilih Film --</option>
                                    @foreach($films as $film)
                                        <option value="{{ $film->id }}" {{ old('film_id') == $film->id ? 'selected' : '' }}>{{ $film->judul }}</option>
                                    @endforeach
                                </select>
                                @error('film_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Isi Kritik</label>
                                <textarea name="content" id="content" rows="4" class="form-control @error('content') is-invalid @enderror" placeholder="Tulis kritik/ulasan film di sini...">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="point" class="form-label">Poin (1-5)</label>
                                <input type="number" min="1" max="5" class="form-control @error('point') is-invalid @enderror" id="point" name="point" placeholder="Contoh: 5" value="{{ old('point') }}">
                                @error('point')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Simpan Data</button>
                            <a href="{{ route('kritik.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection