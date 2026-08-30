@extends('layouts.app')

@section('title', 'Dashboard v3')

@section('content')
<!-- Header Halaman -->
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="mb-0">Dashboard v3</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v3</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<!-- Konten Utama Dashboard v3 -->
<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <!-- Kolom Kiri -->
      <div class="col-lg-6">
        <!-- Card Visitor Chart -->
        <div class="card mb-4">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Online Store Visitors</h3>
              <a href="javascript:void(0);" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View Report</a>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span class="fw-bold fs-5">820</span>
                <span>Visitors Over Time</span>
              </p>
              <p class="ms-auto d-flex flex-column text-end">
                <span class="text-success"> <i class="bi bi-arrow-up"></i> 12.5% </span>
                <span class="text-secondary">Since last week</span>
              </p>
            </div>
            <div class="position-relative mb-4">
              <div id="visitors-chart"></div>
            </div>
            <div class="d-flex flex-row justify-content-end">
              <span class="me-2"><i class="bi bi-square-fill text-primary"></i> This Week</span>
              <span><i class="bi bi-square-fill text-secondary"></i> Last Week</span>
            </div>
          </div>
        </div>

        <!-- Card Table Products -->
        <div class="card mb-4">
          <div class="card-header border-0">
            <h3 class="card-title">Products</h3>
            <div class="card-tools">
              <a href="#" class="btn btn-tool btn-sm"><i class="bi bi-download"></i></a>
              <a href="#" class="btn btn-tool btn-sm"><i class="bi bi-list"></i></a>
            </div>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-striped align-middle">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Sales</th>
                  <th>More</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Some Product</td>
                  <td>$13 USD</td>
                  <td><small class="text-success me-1"><i class="bi bi-arrow-up"></i> 12%</small> 12,000 Sold</td>
                  <td><a href="#" class="text-secondary"><i class="bi bi-search"></i></a></td>
                </tr>
                <tr>
                  <td>Another Product</td>
                  <td>$29 USD</td>
                  <td><small class="text-info me-1"><i class="bi bi-arrow-down"></i> 0.5%</small> 123,234 Sold</td>
                  <td><a href="#" class="text-secondary"><i class="bi bi-search"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Kolom Kanan -->
      <div class="col-lg-6">
        <!-- Card Sales Chart -->
        <div class="card mb-4">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Sales</h3>
              <a href="javascript:void(0);" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View Report</a>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span class="fw-bold fs-5">$18,230.00</span>
                <span>Sales Over Time</span>
              </p>
              <p class="ms-auto d-flex flex-column text-end">
                <span class="text-success"> <i class="bi bi-arrow-up"></i> 33.1% </span>
                <span class="text-secondary">Since Past Year</span>
              </p>
            </div>
            <div class="position-relative mb-4">
              <div id="sales-chart"></div>
            </div>
            <div class="d-flex flex-row justify-content-end">
              <span class="me-2"><i class="bi bi-square-fill text-primary"></i> This year</span>
              <span><i class="bi bi-square-fill text-secondary"></i> Last year</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // 1. Visitors Chart
    const visitors_options = {
      series: [
        { name: 'High - 2026', data: [100, 120, 170, 167, 180, 177, 160] },
        { name: 'Low - 2026', data: [60, 80, 70, 67, 80, 77, 100] },
      ],
      chart: { height: 200, type: 'line', toolbar: { show: false } },
      colors: ['#0d6efd', '#adb5bd'],
      stroke: { curve: 'smooth' },
      xaxis: { categories: ['22th', '23th', '24th', '25th', '26th', '27th', '28th'] },
    };
    new ApexCharts(document.querySelector('#visitors-chart'), visitors_options).render();

    // 2. Sales Chart
    const sales_options = {
      series: [
        { name: 'Net Profit', data: [44, 55, 57, 56, 61, 58, 63, 60, 66] },
        { name: 'Revenue', data: [76, 85, 101, 98, 87, 105, 91, 114, 94] },
      ],
      chart: { type: 'bar', height: 200 },
      colors: ['#0d6efd', '#20c997'],
      xaxis: { categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'] },
    };
    new ApexCharts(document.querySelector('#sales-chart'), sales_options).render();
  });
</script>
@endpush