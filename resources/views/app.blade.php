<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dashboard') - Project Kelompok</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <!-- DataTables CSS (AdminLTE Compatible) -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-th-large mr-1"></i> Live preview</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><i class="fas fa-book mr-1"></i> Documentation</a>
      </li>
    </ul>

    <!-- Right navbar links (Tambahan Baru) -->
    <ul class="navbar-nav ml-auto align-items-center">
      <!-- Messages Dropdown -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
      </li>
      <!-- Notifications Dropdown -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
      </li>
      <!-- Fullscreen -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- User Profile (Orang Pusing) -->
      <li class="nav-item d-flex align-items-center ml-2">
        <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center mr-2" style="width: 32px; height: 32px; font-size: 0.8rem;">
          OP
        </div>
        <span class="d-none d-md-inline text-dark font-weight-normal">Orang Pusing</span>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/') }}" class="brand-link">
      <span class="brand-text font-weight-light pl-3"><strong>App Kelompok</strong></span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <!-- Menu Dashboard Temanmu (Aman) -->
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <!-- Dropdown Menu Tables -->
          <li class="nav-item {{ Request::is('table1') || Request::is('datatable') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('table1') || Request::is('datatable') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/table1') }}" class="nav-link {{ Request::is('table1') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/datatable') }}" class="nav-link {{ Request::is('datatable') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Tables</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Dropdown Menu Charts -->
          <li class="nav-item {{ Request::is('apexcharts') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('apexcharts') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/apexcharts') }}" class="nav-link {{ Request::is('apexcharts') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ApexCharts</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Dropdown Menu Mailbox (Updated) -->
          <li class="nav-item {{ Request::is('mailbox') || Request::is('read') || Request::is('compose') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('mailbox') || Request::is('read') || Request::is('compose') ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Mailbox
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/mailbox') }}" class="nav-link {{ Request::is('mailbox') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/read') }}" class="nav-link {{ Request::is('read') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read Message</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/compose') }}" class="nav-link {{ Request::is('compose') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title', 'Dashboard')</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </div>

  <!-- Main Footer -->
  <footer class="main-footer text-sm">
    <strong>Copyright &copy; {{ date('Y') }} Project Kelompok.</strong> All rights reserved.
  </footer>
</div>

<!-- REQUIRED SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<!-- DataTables JS Plugins -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>

@stack('scripts')
</body>
</html>