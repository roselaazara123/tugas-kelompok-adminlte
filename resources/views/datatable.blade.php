@extends('app')

@section('title', 'Data Tables')

@section('content')
<div class="card card-outline card-primary">
  <div class="card-header border-transparent">
    <h3 class="card-title font-weight-normal">Users Data</h3>
  </div>

  <div class="card-body">
    <!-- Action Buttons & Export Options -->
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
      <div class="mb-2 mb-md-0">
        <button class="btn btn-default btn-sm border mr-1"><i class="fas fa-file-csv mr-1"></i> Export CSV</button>
        <button class="btn btn-default btn-sm border mr-1"><i class="fas fa-file-code mr-1"></i> Export JSON</button>
        <button class="btn btn-default btn-sm border"><i class="fas fa-print mr-1"></i> Print</button>
      </div>
      <div class="d-flex align-items-center">
        <label class="mb-0 mr-2 font-weight-normal text-sm">Filter rows:</label>
        <input type="search" class="form-control form-control-sm" style="width: 180px;">
      </div>
    </div>

    <!-- Data Table -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover mb-0">
        <thead class="thead-light">
          <tr>
            <th class="text-center" style="width: 40px;"># <i class="fas fa-sort text-muted"></i></th>
            <th>Name <i class="fas fa-sort text-muted"></i></th>
            <th>Email <i class="fas fa-sort text-muted"></i></th>
            <th>Role <i class="fas fa-sort text-muted"></i></th>
            <th class="text-center">Status <i class="fas fa-sort text-muted"></i></th>
            <th class="text-center">Joined <i class="fas fa-sort text-muted"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td><strong>Marvel Alfareza Septian</strong></td>
            <td>marvel@example.com</td>
            <td>Admin</td>
            <td class="text-center"><span class="badge badge-success px-2 py-1">Active</span></td>
            <td class="text-center">2024-03-12</td>
          </tr>
          <tr>
            <td class="text-center">2</td>
            <td>Fikri Ramadhan</td>
            <td>fikri@example.com</td>
            <td>Editor</td>
            <td class="text-center"><span class="badge badge-success px-2 py-1">Active</span></td>
            <td class="text-center">2024-04-08</td>
          </tr>
          <tr>
            <td class="text-center">3</td>
            <td>Sela Anggraini</td>
            <td>sela@example.com</td>
            <td>Viewer</td>
            <td class="text-center"><span class="badge badge-info px-2 py-1">Invited</span></td>
            <td class="text-center">2024-06-21</td>
          </tr>
          <tr>
            <td class="text-center">4</td>
            <td>Ilyas gtg</td>
            <td>ilyas@example.com</td>
            <td>Editor</td>
            <td class="text-center"><span class="badge badge-secondary px-2 py-1">Suspended</span></td>
            <td class="text-center">2024-07-15</td>
          </tr>
          <tr>
            <td class="text-center">5</td>
            <td>Dea Ananda</td>
            <td>dea@example.com</td>
            <td>Admin</td>
            <td class="text-center"><span class="badge badge-success px-2 py-1">Active</span></td>
            <td class="text-center">2024-08-30</td>
          </tr>
          <tr>
            <td class="text-center">6</td>
            <td>Liam Carter</td>
            <td>liam@example.com</td>
            <td>Editor</td>
            <td class="text-center"><span class="badge badge-success px-2 py-1">Active</span></td>
            <td class="text-center">2024-09-10</td>
          </tr>
          <tr>
            <td class="text-center">7</td>
            <td>Emma Dawson</td>
            <td>emma@example.com</td>
            <td>Viewer</td>
            <td class="text-center"><span class="badge badge-info px-2 py-1">Invited</span></td>
            <td class="text-center">2024-10-05</td>
          </tr>
          <tr>
            <td class="text-center">8</td>
            <td>Noah Evans</td>
            <td>noah@example.com</td>
            <td>Editor</td>
            <td class="text-center"><span class="badge badge-secondary px-2 py-1">Suspended</span></td>
            <td class="text-center">2024-11-12</td>
          </tr>
          <tr>
            <td class="text-center">9</td>
            <td>Ava Foster</td>
            <td>ava@example.com</td>
            <td>Admin</td>
            <td class="text-center"><span class="badge badge-success px-2 py-1">Active</span></td>
            <td class="text-center">2024-12-01</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Pagination Footer -->
    <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap">
      <small class="text-muted">Showing 1 to 9 of 9 entries</small>
      <ul class="pagination pagination-sm mb-0">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
      </ul>
    </div>
  </div>
</div>
@endsection