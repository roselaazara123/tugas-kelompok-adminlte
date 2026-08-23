@extends('app')

@section('title', 'Dashboard Utama')

@section('content')

<!-- Notifikasi Berhasil -->
@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="fas fa-check-circle mr-1"></i> {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<!-- 1. KARTU STATISTIK DINAMIS -->
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $totalData }}</h3>
        <p>Total Item Data</p>
      </div>
      <div class="icon"><i class="fas fa-box"></i></div>
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ $totalSelesai }}</h3>
        <p>Project Selesai</p>
      </div>
      <div class="icon"><i class="fas fa-check-circle"></i></div>
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ $totalProses }}</h3>
        <p>Dalam Proses</p>
      </div>
      <div class="icon"><i class="fas fa-spinner"></i></div>
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ $totalPending }}</h3>
        <p>Project Pending</p>
      </div>
      <div class="icon"><i class="fas fa-clock"></i></div>
    </div>
  </div>
</div>

<!-- 2. TABEL DATA DINAMIS -->
<div class="row">
  <div class="col-lg-12">
    <div class="card card-primary card-outline">
      <div class="card-header border-0">
        <h3 class="card-title font-weight-bold">
          <i class="fas fa-list mr-1"></i> Data Ringkasan Project
        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
            <i class="fas fa-plus mr-1"></i> Tambah Data Baru
          </button>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-striped table-valign-middle">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Project / Tugas</th>
              <th>Kategori</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @forelse($projects as $index => $item)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama_project }}</td>
                <td>{{ $item->kategori }}</td>
                <td>
                  @if($item->status == 'Selesai')
                    <span class="badge badge-success">Selesai</span>
                  @elseif($item->status == 'Dalam Proses')
                    <span class="badge badge-primary">Dalam Proses</span>
                  @else
                    <span class="badge badge-secondary">Pending</span>
                  @endif
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="text-center text-muted p-4">
                  <em>Belum ada data project. Klik tombol <strong>Tambah Data Baru</strong> di atas untuk mengisi data.</em>
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- MODAL POPUP FORM TAMBAH DATA -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahLabel"><i class="fas fa-plus-circle mr-1"></i> Tambah Project Baru</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_project">Nama Project / Tugas</label>
            <input type="text" name="nama_project" class="form-control" placeholder="Contoh: Fitur Login Admin" required>
          </div>
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" class="form-control" placeholder="Contoh: Backend / Frontend" required>
          </div>
          <div class="form-group">
            <label for="status">Status Progress</label>
            <select name="status" class="form-control" required>
              <option value="">-- Pilih Status --</option>
              <option value="Dalam Proses">Dalam Proses</option>
              <option value="Pending">Pending</option>
              <option value="Selesai">Selesai</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection