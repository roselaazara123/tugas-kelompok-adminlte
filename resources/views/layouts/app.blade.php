<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dashboard Utama') - AdminLTE 4</title>

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

  <!-- Sidebar Global -->
  <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
      <a href="{{ url('/dashboard') }}" class="brand-link">
        <span class="brand-text fw-light"><strong>AdminLTE 4</strong></span>
      </a>
    </div>

    <div class="sidebar-wrapper">
      <nav class="mt-2">
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
          
          <!-- Menu Dashboard -->
          <li class="nav-item {{ Request::is('dashboard*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
              <i class="nav-icon bi bi-speedometer"></i>
              <p>
                Dashboard
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard2') }}" class="nav-link {{ Request::is('dashboard2') ? 'active' : '' }}">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard3') }}" class="nav-link {{ Request::is('dashboard3') ? 'active' : '' }}">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu Tables -->
          <li class="nav-item {{ Request::is('table1*') || Request::is('datatable*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('table1*') || Request::is('datatable*') ? 'active' : '' }}">
              <i class="nav-icon bi bi-table"></i>
              <p>
                Tables
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/table1') }}" class="nav-link {{ Request::is('table1') ? 'active' : '' }}">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/datatable') }}" class="nav-link {{ Request::is('datatable') ? 'active' : '' }}">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Data Tables</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu ApexCharts -->
          <li class="nav-item">
            <a href="{{ url('/apexcharts') }}" class="nav-link {{ Request::is('apexcharts') ? 'active' : '' }}">
              <i class="nav-icon bi bi-graph-up"></i>
              <p>ApexCharts</p>
            </a>
          </li>

          <!-- Autentikasi / Profile & Logout (Muncul di Semua Halaman) -->
          <li class="nav-header">AUTENTIKASI</li>
          
          <li class="nav-item">
            <a href="{{ route('profile.edit') }}" class="nav-link {{ Request::is('profile*') ? 'active' : '' }}">
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

  <!-- Area Isi Konten Halaman -->
  <main class="app-main">
    @yield('content')
  </main>

  <footer class="app-footer text-sm">
    <strong>Copyright &copy; {{ date('Y') }} Project Kelompok.</strong> All rights reserved.
  </footer>

</div>

<!-- Scripts Global -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>

@stack('scripts')
</body>
</html>