<!-- Header / Navbar -->
<nav class="app-header navbar navbar-expand bg-body">
  <div class="container-fluid">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
          <i class="bi bi-list"></i>
        </a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ms-auto">
      <!-- User Menu Dropdown -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <i class="bi bi-person-circle fs-5"></i>
          <span class="d-none d-md-inline ms-1">{{ Auth::user()->name ?? 'User' }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <!-- User header -->
          <li class="user-header text-bg-primary">
            <p>
              {{ Auth::user()->name ?? 'User' }}
              <small>{{ Auth::user()->email ?? '' }}</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer d-flex justify-content-between">
            <a href="{{ route('profile.edit') }}" class="btn btn-default btn-flat">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-default btn-flat text-danger">Log Out</button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

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
        
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('profile.edit') }}" class="nav-link">
            <i class="nav-icon bi bi-person"></i>
            <p>Profile</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard v1</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('dashboard2') }}" class="nav-link {{ request()->routeIs('dashboard2') ? 'active' : '' }}">
            <i class="nav-icon bi bi-speedometer2"></i>
            <p>Dashboard v2</p>
          </a>
        </li>

        <!-- Tambahan Dashboard v3 -->
        <li class="nav-item">
          <a href="{{ route('dashboard3') }}" class="nav-link {{ request()->routeIs('dashboard3') ? 'active' : '' }}">
            <i class="nav-icon bi bi-speedometer2"></i>
            <p>Dashboard v3</p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>