@extends('app')

@section('title', 'ApexCharts')

@section('content')
<div class="row">
  <!-- Line Chart -->
  <div class="col-md-6">
    <div class="card card-outline" style="border-top: 3px solid #ff85a2;">
      <div class="card-header">
        <h3 class="card-title font-weight-bold" style="color: #4a2c40;">Line Chart</h3>
      </div>
      <div class="card-body">
        <div id="line-chart"></div>
      </div>
    </div>
  </div>

  <!-- Area Chart -->
  <div class="col-md-6">
    <div class="card card-outline" style="border-top: 3px solid #b5179e;">
      <div class="card-header">
        <h3 class="card-title font-weight-bold" style="color: #4a2c40;">Area Chart</h3>
      </div>
      <div class="card-body">
        <div id="area-chart"></div>
      </div>
    </div>
  </div>
</div>

<!-- Load CDN ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
  // 1. Line Chart Script
  var optionsLine = {
    series: [{
      name: "Revenue",
      data: [31, 35, 32, 39, 42, 46, 44, 50, 52, 57, 60, 66]
    }],
    chart: { height: 350, type: 'line', zoom: { enabled: false } },
    dataLabels: { enabled: false },
    stroke: { curve: 'smooth', width: 4 },
    colors: ['#ff85a2'], // Warna Pink Soft/Cute
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yaxis: {
      labels: {
        formatter: function (val) { return "$" + val + "k"; }
      }
    }
  };
  var lineChart = new ApexCharts(document.querySelector("#line-chart"), optionsLine);
  lineChart.render();

  // 2. Area Chart Script
  var optionsArea = {
    series: [{
      name: 'New Visitors',
      data: [8000, 9200, 8700, 10500, 12100, 11600, 13800]
    }, {
      name: 'Returning Visitors',
      data: [4200, 4800, 5100, 4900, 5800, 6100, 6900]
    }],
    chart: { height: 350, type: 'area' },
    dataLabels: { enabled: false },
    stroke: { curve: 'smooth', width: 3 },
    colors: ['#7209b7', '#4cc9f0'], // Warna Soft Purple & Pastel Mint/Cyan
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 1,
        opacityFrom: 0.6,
        opacityTo: 0.2,
      }
    },
    xaxis: {
      categories: ['Jan \'25', 'Feb \'25', 'Mar \'25', 'Apr \'25', 'May \'25', 'Jun \'25', 'Jul \'25']
    }
  };
  var areaChart = new ApexCharts(document.querySelector("#area-chart"), optionsArea);
  areaChart.render();
</script>
@endsection