<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dashboard') - AdminLTE 4</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css">
  <!-- AdminLTE 4 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/css/adminlte.min.css">
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

  <!-- Header / Navbar -->
  <nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
      <!-- Left Navbar Links -->
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

      <!-- Right Navbar Links (User & Logout) -->
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle"></i>
            <span class="d-none d-md-inline ms-1">{{ Auth::user()->name ?? 'User' }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <!-- User Header -->
            <li class="user-header bg-primary text-white">
              <i class="bi bi-person-circle display-4"></i>
              <p>
                {{ Auth::user()->name ?? 'User' }}
                <small>{{ Auth::user()->email ?? 'user@example.com' }}</small>
              </p>
            </li>
            <!-- Menu Items -->
            <li class="user-body">
              <a href="{{ route('profile.edit') }}" class="btn btn-default btn-flat float-start">
                <i class="bi bi-gear-fill me-1"></i> Profile
              </a>
              <!-- Form Logout Navbar -->
              <form method="POST" action="{{ route('logout') }}" class="float-end">
                @csrf
                <button type="submit" class="btn btn-danger btn-flat">
                  <i class="bi bi-box-arrow-right me-1"></i> Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Sidebar Navbar -->
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
          
          <!-- Dashboard Menu Dropdown -->
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

          <!-- Tables Menu -->
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

          <!-- ApexCharts Menu -->
          <li class="nav-item">
            <a href="{{ url('/apexcharts') }}" class="nav-link {{ Request::is('apexcharts') ? 'active' : '' }}">
              <i class="nav-icon bi bi-graph-up"></i>
              <p>ApexCharts</p>
            </a>
          </li>

          <li class="nav-header">AKUN</li>

          <!-- Profile Menu -->
          <li class="nav-item">
            <a href="{{ route('profile.edit') }}" class="nav-link {{ Request::is('profile') ? 'active' : '' }}">
              <i class="nav-icon bi bi-person"></i>
              <p>Profile</p>
            </a>
          </li>

          <!-- Logout Button (Sidebar) -->
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" id="logout-sidebar-form">
              @csrf
              <a href="#" onclick="event.preventDefault(); document.getElementById('logout-sidebar-form').submit();" class="nav-link text-danger">
                <i class="nav-icon bi bi-box-arrow-right"></i>
                <p>Logout</p>
              </a>
            </form>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <!-- Main Content Wrapper -->
  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0">@yield('title', 'Dashboard')</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title', 'Dashboard')</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="app-content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="app-footer text-sm">
    <div class="float-end d-none d-sm-inline">Anything you want</div>
    <strong>Copyright &copy; {{ date('Y') }} Project Kelompok.</strong> All rights reserved.
  </footer>

</div>

<!-- Scripts (AdminLTE 4 + Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/js/adminlte.min.js"></script>

@stack('scripts')
</body>
</html>