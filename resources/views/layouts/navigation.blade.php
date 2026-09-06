<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!-- Brand Logo -->
  <div class="sidebar-brand">
    <a href="{{ route('dashboard') }}" class="brand-link">
      <span class="brand-text fw-light">App Kelompok</span>
    </a>
  </div>

  <!-- Sidebar Menu -->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

        <!-- DASHBOARD -->
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard*') ? 'active' : '' }}">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- WIDGETS DROPDOWN -->
        <li class="nav-item {{ request()->routeIs('infobox') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ request()->routeIs('infobox') ? 'active' : '' }}">
            <i class="nav-icon bi bi-box-seam"></i>
            <p>
              Widgets
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('infobox') }}" class="nav-link {{ request()->routeIs('infobox') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Info Box</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- TABLES -->
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
              <a href="{{ url('/datatable') }}" class="nav-link {{ request()->is('datatable') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Data Tables</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- CHARTS -->
        <li class="nav-item {{ request()->is('apexcharts') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ request()->is('apexcharts') ? 'active' : '' }}">
            <i class="nav-icon bi bi-graph-up"></i>
            <p>
              Charts
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/apexcharts') }}" class="nav-link {{ request()->is('apexcharts') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>ApexCharts</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- MAILBOX -->
        <li class="nav-item {{ (request()->is('mailbox') || request()->is('read') || request()->is('compose')) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ (request()->is('mailbox') || request()->is('read') || request()->is('compose')) ? 'active' : '' }}">
            <i class="nav-icon bi bi-envelope"></i>
            <p>
              Mailbox
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/mailbox') }}" class="nav-link {{ request()->is('mailbox') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Inbox</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/read') }}" class="nav-link {{ request()->is('read') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Read Message</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/compose') }}" class="nav-link {{ request()->is('compose') ? 'active' : '' }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Compose</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- HEADER AUTENTIKASI -->
        <li class="nav-header">AUTENTIKASI</li>

        <!-- PROFILE -->
        <li class="nav-item">
          <a href="{{ route('profile.edit') }}" class="nav-link {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
            <i class="nav-icon bi bi-person"></i>
            <p>Profile</p>
          </a>
        </li>

        <!-- LOGOUT -->
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" class="nav-link text-danger" onclick="event.preventDefault(); this.closest('form').submit();">
              <i class="nav-icon bi bi-box-arrow-right"></i>
              <p>Logout</p>
            </a>
          </form>
        </li>

      </ul>
    </nav>
  </div>
</aside>