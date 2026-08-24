<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 4 | Info Box</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"><i class="bi bi-list"></i></a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a href="#" class="nav-link"><i class="bi bi-grid"></i> Live preview</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a href="#" class="nav-link"><i class="bi bi-journal-text"></i> Documentation</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto align-items-center">
          <!-- Search -->
          <li class="nav-item me-2">
            <div class="input-group input-group-sm">
              <span class="input-group-text bg-transparent border-secondary text-secondary"><i class="bi bi-search"></i></span>
              <input class="form-control form-control-sidebar bg-transparent border-secondary" type="search" placeholder="Search..." aria-label="Search">
            </div>
          </li>
          <!-- Messages Dropdown -->
          <li class="nav-item dropdown me-2">
            <a class="nav-link position-relative" data-bs-toggle="dropdown" href="#">
              <i class="bi bi-chat-left-text"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
            </a>
          </li>
          <!-- Notifications Dropdown -->
          <li class="nav-item dropdown me-2">
            <a class="nav-link position-relative" data-bs-toggle="dropdown" href="#">
              <i class="bi bi-bell"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">15</span>
            </a>
          </li>
          <!-- Language -->
          <li class="nav-item me-2">
            <a class="nav-link" href="#"><i class="bi bi-translate"></i></a>
          </li>
          <!-- Fullscreen -->
          <li class="nav-item me-2">
            <a class="nav-link" href="#" data-lte-toggle="fullscreen"><i class="bi bi-arrows-angle-expand"></i></a>
          </li>
          <!-- Dark/Light Toggle -->
          <li class="nav-item me-2">
            <a class="nav-link" href="#"><i class="bi bi-moon-stars"></i></a>
          </li>
          <!-- User Menu -->
          <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
              <img src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow me-2" alt="User Image" width="30">
              <span class="d-none d-md-inline">Alexander Pierce</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Sidebar -->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
      <div class="sidebar-brand">
        <a href="#" class="brand-link">
          <span class="brand-text fw-light"><strong>AdminLTE 4</strong></span>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <nav class="mt-2">
          <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon bi bi-speedometer"></i>
                <p>Dashboard <i class="nav-arrow bi bi-chevron-right"></i></p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon bi bi-box-seam"></i>
                <p>Widgets <i class="nav-arrow bi bi-chevron-down"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Small Box</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon bi bi-record-circle"></i>
                    <p>info Box</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content -->
    <main class="app-main">
      <div class="app-content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Info Box</h3></div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Info Box</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      
      <div class="app-content">
        <div class="container-fluid">

          <!-- 1. Info Box Standard -->
          <h5 class="mb-3">Info Box</h5>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon text-bg-primary shadow-sm"><i class="bi bi-gear-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">CPU Traffic</span>
                  <span class="info-box-number">10 <small>%</small></span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon text-bg-success shadow-sm"><i class="bi bi-cart-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Sales</span>
                  <span class="info-box-number">760</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon text-bg-warning shadow-sm"><i class="bi bi-people-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">New Members</span>
                  <span class="info-box-number">2,000</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon text-bg-danger shadow-sm"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Likes</span>
                  <span class="info-box-number">41,410</span>
                </div>
              </div>
            </div>
          </div>

          <!-- 2. Info Box With Custom Shadows -->
          <h5 class="mt-4 mb-3">Info Box With Custom Shadows <small class="text-secondary fw-normal">Using Bootstrap's Shadow Utility</small></h5>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box shadow-lg">
                <span class="info-box-icon text-bg-primary"><i class="bi bi-gear-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">CPU Traffic</span>
                  <span class="info-box-number">10 <small>%</small></span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box shadow-lg">
                <span class="info-box-icon text-bg-success"><i class="bi bi-cart-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Sales</span>
                  <span class="info-box-number">760</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box shadow-lg">
                <span class="info-box-icon text-bg-warning"><i class="bi bi-people-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">New Members</span>
                  <span class="info-box-number">2,000</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box shadow-lg">
                <span class="info-box-icon text-bg-danger"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Likes</span>
                  <span class="info-box-number">41,410</span>
                </div>
              </div>
            </div>
          </div>

          <!-- 3. Info Box With bg-* -->
          <h5 class="mt-4 mb-3">Info Box With <span class="text-danger">bg-*</span></h5>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box text-bg-primary">
                <span class="info-box-icon"><i class="bi bi-bookmark-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Bookmarks</span>
                  <span class="info-box-number">41,410</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">70% Increase in 30 Days</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box text-bg-success">
                <span class="info-box-icon"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Likes</span>
                  <span class="info-box-number">41,410</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">70% Increase in 30 Days</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box text-bg-warning">
                <span class="info-box-icon"><i class="bi bi-calendar-event-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Events</span>
                  <span class="info-box-number">41,410</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">70% Increase in 30 Days</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box text-bg-danger">
                <span class="info-box-icon"><i class="bi bi-chat-text-fill"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Comments</span>
                  <span class="info-box-number">41,410</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">70% Increase in 30 Days</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>

  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/js/adminlte.min.js"></script>
</body>
</html>