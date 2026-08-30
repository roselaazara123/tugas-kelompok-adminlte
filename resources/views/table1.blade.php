@extends('layouts.app')

@section('title', 'Tabel Data')

@section('content')
<div class="card">
  <div class="card-header border-transparent">
    <h3 class="card-title font-weight-normal">Bordered Table</h3>
  </div>

  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-bordered table-striped mb-0">
        <thead>
          <tr>
            <th style="width: 50px;" class="text-center">#</th>
            <th>Task</th>
            <th>Progress</th>
            <th style="width: 80px;" class="text-center">Label</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1.</td>
            <td>Update software & dependencies</td>
            <td>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-danger" style="width: 55%"></div>
              </div>
            </td>
            <td class="text-center"><span class="badge bg-danger">55%</span></td>
          </tr>
          <tr>
            <td class="text-center">2.</td>
            <td>Clean database & optimization</td>
            <td>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-warning" style="width: 70%"></div>
              </div>
            </td>
            <td class="text-center"><span class="badge bg-warning">70%</span></td>
          </tr>
          <tr>
            <td class="text-center">3.</td>
            <td>Cron job running schedule</td>
            <td>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-primary" style="width: 30%"></div>
              </div>
            </td>
            <td class="text-center"><span class="badge bg-primary">30%</span></td>
          </tr>
          <tr>
            <td class="text-center">4.</td>
            <td>Fix and squish UI bugs</td>
            <td>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-success" style="width: 90%"></div>
              </div>
            </td>
            <td class="text-center"><span class="badge bg-success">90%</span></td>
          </tr>
          <tr>
            <td class="text-center">5.</td>
            <td>API Authentication setup</td>
            <td>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-info" style="width: 45%"></div>
              </div>
            </td>
            <td class="text-center"><span class="badge bg-info">45%</span></td>
          </tr>
          <tr>
            <td class="text-center">6.</td>
            <td>Refactor Mailbox Controllers</td>
            <td>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-purple" style="width: 60%"></div>
              </div>
            </td>
            <td class="text-center"><span class="badge bg-purple">60%</span></td>
          </tr>
          <tr>
            <td class="text-center">7.</td>
            <td>Setup ApexCharts dashboard integration</td>
            <td>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-indigo" style="width: 85%"></div>
              </div>
            </td>
            <td class="text-center"><span class="badge bg-indigo">85%</span></td>
          </tr>
          <tr>
            <td class="text-center">8.</td>
            <td>Testing DataTables pagination</td>
            <td>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-teal" style="width: 20%"></div>
              </div>
            </td>
            <td class="text-center"><span class="badge bg-teal">20%</span></td>
          </tr>
          <tr>
            <td class="text-center">9.</td>
            <td>Security audit & permission roles</td>
            <td>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-pink" style="width: 75%"></div>
              </div>
            </td>
            <td class="text-center"><span class="badge bg-pink">75%</span></td>
          </tr>
          <tr>
            <td class="text-center">10.</td>
            <td>Deployment to production server</td>
            <td>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-orange" style="width: 95%"></div>
              </div>
            </td>
            <td class="text-center"><span class="badge bg-orange">95%</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection