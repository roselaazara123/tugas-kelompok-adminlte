@extends('layouts.app')

@section('title', 'Data Tables')

@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Users Data</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <!-- Tombol Aksi Ekspor -->
            <div class="mb-3">
              <button class="btn btn-default btn-sm"><i class="fas fa-file-csv mr-1"></i> Export CSV</button>
              <button class="btn btn-default btn-sm"><i class="fas fa-file-code mr-1"></i> Export JSON</button>
              <button class="btn btn-default btn-sm"><i class="fas fa-print mr-1"></i> Print</button>
            </div>

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Joined</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Olivia Bennett</td>
                  <td>olivia@example.com</td>
                  <td>Admin</td>
                  <td><span class="badge badge-success">Active</span></td>
                  <td>2024-03-12</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Liam Carter</td>
                  <td>liam@example.com</td>
                  <td>Editor</td>
                  <td><span class="badge badge-success">Active</span></td>
                  <td>2024-04-08</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Emma Dawson</td>
                  <td>emma@example.com</td>
                  <td>Viewer</td>
                  <td><span class="badge badge-info">Invited</span></td>
                  <td>2024-06-21</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Noah Evans</td>
                  <td>noah@example.com</td>
                  <td>Editor</td>
                  <td><span class="badge badge-secondary">Suspended</span></td>
                  <td>2024-07-15</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Ava Foster</td>
                  <td>ava@example.com</td>
                  <td>Admin</td>
                  <td><span class="badge badge-success">Active</span></td>
                  <td>2024-08-30</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@push('scripts')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": true, 
      "autoWidth": false,
      "language": {
        "search": "Filter rows:"
      }
    });
  });
</script>
@endpush