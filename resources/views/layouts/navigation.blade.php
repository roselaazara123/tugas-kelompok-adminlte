<!-- Sidebar Utama -->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!-- Brand Logo -->
  <div class="sidebar-brand">
    <a href="{{ route('dashboard') }}" class="brand-link">
      <span class="brand-text fw-light">Admin<b>LTE</b> 4</span>
    </a>
  </div>

  <!-- Sidebar Menu -->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

        <!-- DROPDOWN DASHBOARD -->
        <li class="nav-item {{ request()->routeIs('dashboard*') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ request()->routeIs('dashboard*') ? 'active' : '' }}">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Dashboard
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dashboard2') }}" class="nav-link {{ request()->routeIs('dashboard2') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dashboard3') }}" class="nav-link {{ request()->routeIs('dashboard3') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- DROPDOWN TABLES -->
        <li class="nav-item {{ (request()->routeIs('table1') || request()->is('datatable')) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ (request()->routeIs('table1') || request()->is('datatable')) ? 'active' : '' }}">
            <i class="nav-icon bi bi-table"></i>
            <p>
              Tables
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('table1') }}" class="nav-link {{ request()->routeIs('table1') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Simple Tables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/datatable" class="nav-link {{ request()->is('datatable') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Data Tables</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- MENU CHARTS / APEXCHARTS -->
        <li class="nav-item">
          <a href="/apexcharts" class="nav-link {{ request()->is('apexcharts') ? 'active' : '' }}">
            <i class="nav-icon bi bi-bar-chart-line-fill"></i>
            <p>ApexCharts</p>
          </a>
        </li>

        <!-- PROFILE -->
        <li class="nav-item">
          <a href="{{ route('profile.edit') }}" class="nav-link {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
            <i class="nav-icon bi bi-person"></i>
            <p>Profile</p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>