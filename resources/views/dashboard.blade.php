@extends('layouts.app')

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

<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    
    <!-- 1. KARTU STATISTIK DINAMIS (KODE TEMAN) -->
    <div class="row mb-4">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info text-white p-3 rounded">
          <div class="inner">
            <h3>{{ $totalData ?? 0 }}</h3>
            <p>Total Item Data</p>
          </div>
          <div class="icon"><i class="fas fa-box"></i></div>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success text-white p-3 rounded">
          <div class="inner">
            <h3>{{ $totalSelesai ?? 0 }}</h3>
            <p>Project Selesai</p>
          </div>
          <div class="icon"><i class="fas fa-check-circle"></i></div>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning text-dark p-3 rounded">
          <div class="inner">
            <h3>{{ $totalProses ?? 0 }}</h3>
            <p>Dalam Proses</p>
          </div>
          <div class="icon"><i class="fas fa-spinner"></i></div>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger text-white p-3 rounded">
          <div class="inner">
            <h3>{{ $totalPending ?? 0 }}</h3>
            <p>Project Pending</p>
          </div>
          <div class="icon"><i class="fas fa-clock"></i></div>
        </div>
      </div>
    </div>

    <!-- 2. TABEL DATA DINAMIS (KODE TEMAN) -->
    <div class="row mb-4">
      <div class="col-lg-12">
        <div class="card card-primary card-outline">
          <div class="card-header border-0 d-flex justify-content-between align-items-center">
            <h3 class="card-title font-weight-bold mb-0">
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
                @forelse($projects ?? [] as $index => $item)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_project }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>
                      @if($item->status == 'Selesai')
                        <span class="badge bg-success">Selesai</span>
                      @elseif($item->status == 'Dalam Proses')
                        <span class="badge bg-primary">Dalam Proses</span>
                      @else
                        <span class="badge bg-secondary">Pending</span>
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

    <!-- 3. GRAFIK DAN WIDGET (KODE KAMU) -->
    <div class="row">
      <div class="col-lg-7">
        <div class="card mb-4">
          <div class="card-header border-0">
            <h3 class="card-title">Sales Value</h3>
          </div>
          <div class="card-body">
            <div id="revenue-chart" style="min-height: 300px; width: 100%;"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="card text-bg-primary mb-4">
          <div class="card-header border-0">
            <h3 class="card-title">Sales Value Map</h3>
          </div>
          <div class="card-body">
            <div id="world-map" style="height: 220px; width: 100%;"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection

@push('scripts')
<script>
  window.addEventListener('load', function () {
    if (typeof ApexCharts !== 'undefined') {
      const sales_chart_options = {
        series: [
          { name: 'Digital Goods', data: [28, 48, 40, 19, 86, 27, 90] },
          { name: 'Electronics', data: [65, 59, 80, 81, 56, 55, 40] }
        ],
        chart: { height: 300, type: 'area', toolbar: { show: false } },
        legend: { show: false },
        colors: ['#0d6efd', '#20c997'],
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth' },
        xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'] },
        tooltip: { theme: 'dark' }
      };

      const sales_chart = new ApexCharts(document.querySelector("#revenue-chart"), sales_chart_options);
      sales_chart.render();
    }

    if (typeof jsVectorMap !== 'undefined') {
      const map = new jsVectorMap({
        selector: '#world-map',
        map: 'world',
        visualizeData: {
          scale: ['#eeeeee', '#007bff'],
          values: { US: 2920, DE: 1300, JP: 1000, BR: 600, IN: 500, GB: 320, RU: 3000 }
        }
      });
    }
  });
</script>
@endpush