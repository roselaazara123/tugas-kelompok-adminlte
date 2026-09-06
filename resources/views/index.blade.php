@extends('layouts.app') {{-- Sesuaikan nama master layout Anda --}}

@section('content')
<div class="container my-4">
    <h3>Daftar Cast</h3>
    <a href="{{ route('cast.create') }}" class="btn btn-success mb-3">Tambah Cast Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->bio }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada data cast.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection