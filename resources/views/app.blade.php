<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dashboard') - Project Kelompok</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css">
  <!-- AdminLTE 4 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/css/adminlte.min.css">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
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

      <!-- Navbar Kanan (User & Notifikasi) -->
      <ul class="navbar-nav ms-auto align-items-center">
        <!-- Messages -->
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge text-bg-danger rounded-pill">3</span>
          </a>
        </li>
        <!-- Notifications -->
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-bell"></i>
            <span class="badge text-bg-warning rounded-pill">15</span>
          </a>
        </li>
        
        <!-- User Profile Dropdown (Dengan Fitur Logout Dinamis) -->
        <li class="nav-item dropdown ms-2">
          <a class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" href="#">
            <i class="bi bi-person-circle fs-5 me-1"></i>
            <span class="d-none d-md-inline">{{ Auth::user()->name ?? 'User' }}</span>
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

  <!-- Main Sidebar Container -->
  <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
      <a href="{{ url('/dashboard') }}" class="brand-link">
        <span class="brand-text fw-light"><strong>App Kelompok</strong></span>
      </a>
    </div>

    <div class="sidebar-wrapper">
      <nav class="mt-2">
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
          
          <!-- Menu Dashboard -->
          <li class="nav-item {{ Request::is('dashboard*') ? 'menu-open' : '' }}">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
              <i class="nav-icon bi bi-speedometer"></i>
              <p>Dashboard</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0">@yield('title', 'Dashboard')</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="app-content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </main>

  <!-- Main Footer -->
  <footer class="app-footer text-sm">
    <strong>Copyright &copy; {{ date('Y') }} Project Kelompok.</strong> All rights reserved.
  </footer>
</div>

<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/js/adminlte.min.js"></script>

<!-- DataTables JS Plugins -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

@stack('scripts')
</body>
</html>