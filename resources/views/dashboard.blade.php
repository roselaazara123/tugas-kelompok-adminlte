@extends('layouts.app')

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <!-- Small Boxes -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box text-bg-primary">
          <div class="inner"><h3>150</h3><p>New Orders</p></div>
          <i class="small-box-icon bi bi-cart-fill"></i>
          <a href="#" class="small-box-footer link-light link-underline-opacity-0">More info <i class="bi bi-link-45deg"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box text-bg-success">
          <div class="inner"><h3>53<sup class="fs-5">%</sup></h3><p>Bounce Rate</p></div>
          <i class="small-box-icon bi bi-bar-chart-fill"></i>
          <a href="#" class="small-box-footer link-light link-underline-opacity-0">More info <i class="bi bi-link-45deg"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box text-bg-warning">
          <div class="inner"><h3>44</h3><p>User Registrations</p></div>
          <i class="small-box-icon bi bi-person-plus-fill"></i>
          <a href="#" class="small-box-footer link-dark link-underline-opacity-0">More info <i class="bi bi-link-45deg"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box text-bg-danger">
          <div class="inner"><h3>65</h3><p>Unique Visitors</p></div>
          <i class="small-box-icon bi bi-pie-chart-fill"></i>
          <a href="#" class="small-box-footer link-light link-underline-opacity-0">More info <i class="bi bi-link-45deg"></i></a>
        </div>
      </div>
    </div>

    <!-- Main Row -->
    <div class="row">
      <!-- Area Grafik -->
      <div class="col-lg-7">
        <div class="card mb-4">
          <div class="card-header border-0">
            <h3 class="card-title">Sales Value</h3>
          </div>
          <div class="card-body">
            <div id="revenue-chart" style="min-height: 300px; width: 100%;"></div>
          </div>
        </div>

        <div class="card direct-chat direct-chat-primary mb-4">
          <div class="card-header">
            <h3 class="card-title">Direct Chat</h3>
            <div class="card-tools">
              <span title="3 New Messages" class="badge text-bg-primary">3</span>
              <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i class="bi bi-minus-lg"></i></button>
              <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"><i class="bi bi-x-lg"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="direct-chat-messages p-3" style="height: 250px; overflow-y: auto;">
              <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-start">Alexander Pierce</span>
                  <span class="direct-chat-timestamp float-end">23 Jan 5:37 pm</span>
                </div>
                <img class="direct-chat-img rounded-circle" src="https://adminlte.io/themes/v3/dist/img/user1-128x128.jpg" alt="user image" style="width:35px">
                <div class="direct-chat-text bg-dark p-2 rounded mt-1">Working with AdminLTE on a great new app! Wanna join?</div>
              </div>
              <div class="direct-chat-msg right text-end mt-3">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-end">Sarah Bullock</span>
                  <span class="direct-chat-timestamp float-start">23 Jan 6:10 pm</span>
                </div>
                <img class="direct-chat-img rounded-circle float-end" src="https://adminlte.io/themes/v3/dist/img/user3-128x128.jpg" alt="user image" style="width:35px">
                <div class="direct-chat-text bg-primary text-white p-2 rounded mt-1 d-inline-block">I would love to.</div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <form action="#" method="post">
              <div class="input-group">
                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                <span class="input-group-append">
                  <button type="button" class="btn btn-primary">Send</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Area Peta -->
      <div class="col-lg-5">
        <div class="card text-bg-primary mb-4">
          <div class="card-header border-0">
            <h3 class="card-title">Sales Value</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-primary btn-sm" data-lte-toggle="card-collapse">
                <i class="bi bi-minus-lg"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div id="world-map" style="height: 220px; width: 100%;"></div>
          </div>
          <div class="card-footer bg-transparent border-0 text-white">
            <div class="row text-center">
              <div class="col-4">
                <div class="fw-bold fs-5">8,390</div>
                <div class="text-white-50">Visitors</div>
              </div>
              <div class="col-4">
                <div class="fw-bold fs-5">30%</div>
                <div class="text-white-50">Online</div>
              </div>
              <div class="col-4">
                <div class="fw-bold fs-5">13,000</div>
                <div class="text-white-50">Sales</div>
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
    // 1. ApexCharts
    if (typeof ApexCharts !== 'undefined') {
      const sales_chart_options = {
        series: [
          { name: 'Digital Goods', data: [28, 48, 40, 19, 86, 27, 90] },
          { name: 'Electronics', data: [65, 59, 80, 81, 56, 55, 40] }
        ],
        chart: { height: 300, type: 'area', toolbar: { show: false } },
        legend: { show: false },
        colors: ['#0d6efd', '#20c997'],
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth' },
        xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'] },
        tooltip: { theme: 'dark' }
      };

      const sales_chart = new ApexCharts(document.querySelector("#revenue-chart"), sales_chart_options);
      sales_chart.render();
    }

    // 2. jsVectorMap
    if (typeof jsVectorMap !== 'undefined') {
      const map = new jsVectorMap({
        selector: '#world-map',
        map: 'world',
        visualizeData: {
          scale: ['#eeeeee', '#007bff'],
          values: { US: 2920, DE: 1300, JP: 1000, BR: 600, IN: 500, GB: 320, RU: 3000 }
        }
      });
    }
  });
</script>
@endpush