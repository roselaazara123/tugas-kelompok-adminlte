@extends('layouts.app')

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Dashboard v2</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v2</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <!-- Info Boxes -->
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
          <span class="info-box-icon text-bg-danger shadow-sm"><i class="bi bi-hand-thumbs-up-fill"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">41,410</span>
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
    </div>

    <!-- Monthly Report Card -->
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="card-title">Monthly Recap Report</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <p class="text-center"><strong>Sales: 1 Jan, 2024 - 30 Jul, 2024</strong></p>
                <div id="sales-bar-chart" style="min-height: 250px;"></div>
              </div>
              <div class="col-md-4">
                <p class="text-center"><strong>Goal Completion</strong></p>
                <div class="progress-group mb-3">
                  Add Products to Cart
                  <span class="float-end"><b>160</b>/200</span>
                  <div class="progress progress-sm"><div class="progress-bar bg-primary" style="width: 80%"></div></div>
                </div>
                <div class="progress-group mb-3">
                  Complete Purchase
                  <span class="float-end"><b>310</b>/400</span>
                  <div class="progress progress-sm"><div class="progress-bar bg-danger" style="width: 75%"></div></div>
                </div>
                <div class="progress-group mb-3">
                  Visit Premium Page
                  <span class="float-end"><b>480</b>/800</span>
                  <div class="progress progress-sm"><div class="progress-bar bg-success" style="width: 60%"></div></div>
                </div>
              </div>
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
  window.addEventListener('load', function () {
    if (typeof ApexCharts !== 'undefined') {
      const options = {
        series: [{ name: 'Sales', data: [65, 59, 80, 81, 56, 55, 40] }],
        chart: { type: 'bar', height: 250, toolbar: { show: false } },
        colors: ['#0d6efd'],
        xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'] }
      };
      const chart = new ApexCharts(document.querySelector("#sales-bar-chart"), options);
      chart.render();
    }
  });
</script>
@endpush