<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Utama - AdminLTE 4</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css">
  <!-- jsVectorMap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css">
  <!-- AdminLTE 4 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/css/adminlte.min.css">
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

  <!-- Header / Navbar -->
  <nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
            <i class="bi bi-list"></i>
          </a>
        </li>
        <li class="nav-item d-none d-md-block">
          <a href="{{ url('/dashboard') }}" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- User Navbar Right -->
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
            <i class="bi bi-person-circle"></i>
            <span class="d-none d-md-inline ms-1">{{ Auth::user()->name ?? 'User' }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <li class="dropdown-header text-center fw-bold">
              {{ Auth::user()->email ?? 'user@example.com' }}
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a href="{{ route('profile.edit') }}" class="dropdown-item">
                <i class="bi bi-gear me-2"></i> Profile
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item text-danger">
                  <i class="bi bi-box-arrow-right me-2"></i> Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Sidebar -->
  <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!-- Brand Logo -->
    <div class="sidebar-brand">
      <a href="{{ url('/dashboard') }}" class="brand-link">
        <span class="brand-text fw-light"><strong>AdminLTE 4</strong></span>
      </a>
    </div>

    <!-- Sidebar Menu -->
    <div class="sidebar-wrapper">
      <nav class="mt-2">
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
          
          <!-- Menu Dashboard -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon bi bi-speedometer"></i>
              <p>
                Dashboard
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link active">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard2') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard3') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu Tables -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-table"></i>
              <p>
                Tables
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/table1') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/datatable') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Data Tables</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu ApexCharts -->
          <li class="nav-item">
            <a href="{{ url('/apexcharts') }}" class="nav-link">
              <i class="nav-icon bi bi-graph-up"></i>
              <p>ApexCharts</p>
            </a>
          </li>

          <!-- Menu Mailbox (BARU DITAMBAHKAN) -->
          <li class="nav-item">
            <a href="{{ url('/mailbox') }}" class="nav-link">
              <i class="nav-icon bi bi-envelope"></i>
              <p>Mailbox</p>
            </a>
          </li>

          <!-- Autentikasi / Profile & Logout -->
          <li class="nav-header">AUTENTIKASI</li>
          
          <li class="nav-item">
            <a href="{{ route('profile.edit') }}" class="nav-link">
              <i class="nav-icon bi bi-person"></i>
              <p>Profile</p>
            </a>
          </li>

          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" id="logout-sidebar-form">
              @csrf
              <a href="#" onclick="event.preventDefault(); document.getElementById('logout-sidebar-form').submit();" class="nav-link text-danger">
                <i class="nav-icon bi bi-box-arrow-right"></i>
                <p><strong>Logout</strong></p>
              </a>
            </form>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper Utama -->
  <main class="app-main">
    
    <!-- Notifikasi Berhasil -->
    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
        <i class="fas fa-check-circle mr-1"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
        
        <!-- 1. KARTU STATISTIK DINAMIS -->
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

        <!-- 2. TABEL DATA DINAMIS -->
        <div class="row mb-4">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header border-0 d-flex justify-content-between align-items-center">
                <h3 class="card-title font-weight-bold mb-0">
                  <i class="fas fa-list mr-1"></i> Data Ringkasan Project
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambah">
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

        <!-- 3. GRAFIK DAN WIDGET -->
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
  </main>

  <footer class="app-footer text-sm">
    <strong>Copyright &copy; {{ date('Y') }} Project Kelompok.</strong> All rights reserved.
  </footer>

</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>

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
</body>
</html>