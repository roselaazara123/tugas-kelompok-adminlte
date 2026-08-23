@extends('app')

@section('title', 'Mailbox')

@section('content')
<div class="row">
  <!-- Sidebar Kiri Mailbox -->
  <div class="col-md-3">
    <a href="#" class="btn btn-primary btn-block mb-3">
      <i class="fas fa-edit mr-2"></i> Compose
    </a>

    <!-- Folders -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Folders</h3>
      </div>
      <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item active">
            <a href="#" class="nav-link active bg-primary">
              <i class="fas fa-inbox mr-2"></i> Inbox
              <span class="badge badge-light float-right">3</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-primary">
              <i class="fas fa-paper-plane mr-2"></i> Sent
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-primary">
              <i class="fas fa-file-alt mr-2"></i> Drafts
              <span class="badge badge-secondary float-right">2</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-primary">
              <i class="far fa-star mr-2"></i> Starred
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-primary">
              <i class="fas fa-archive mr-2"></i> Archive
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-primary">
              <i class="fas fa-exclamation-circle mr-2"></i> Spam
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-primary">
              <i class="far fa-trash-alt mr-2"></i> Trash
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Labels -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Labels</h3>
      </div>
      <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link text-primary">
              <i class="fas fa-circle text-primary mr-2"></i> Customers
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-primary">
              <i class="fas fa-circle text-success mr-2"></i> Billing
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-primary">
              <i class="fas fa-circle text-warning mr-2"></i> Internal
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Area Pesan/Inbox -->
  <div class="col-md-9">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Inbox</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 250px;">
            <input type="text" class="form-control" placeholder="Search mail...">
            <div class="input-group-append">
              <div class="btn btn-outline-secondary">
                <i class="fas fa-search"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body p-0">
        <!-- Control Buttons & Pagination -->
        <div class="mailbox-controls p-2 border-bottom d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-square"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-folder"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-info-circle"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
          </div>
          <span class="text-muted text-sm">1–8 of 8</span>
        </div>

        <!-- Mail List -->
        <div class="table-responsive mailbox-messages">
          <table class="table table-hover table-striped">
            <tbody>
              <tr>
                <td><input type="checkbox"></td>
                <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                <td class="mailbox-name"><b>Siti Nurhaliza</b></td>
                <td class="mailbox-subject"><span class="badge badge-primary mr-1">&nbsp;</span> <b>Update Modul Praktikum Web</b> — Dokumen revisi tugas kelompok sudah saya upload ke repositori...</td>
                <td class="mailbox-date">10:42 AM</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td class="mailbox-star"><a href="#"><i class="far fa-star text-secondary"></i></a></td>
                <td class="mailbox-name"><b>Dosen Pembimbing</b></td>
                <td class="mailbox-subject"><span class="badge badge-secondary mr-1">&nbsp;</span> <b>Pengumuman Jadwal Bimbingan Project</b> — Diberitahukan kepada seluruh mahasiswa...</td>
                <td class="mailbox-date">9:08 AM</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td class="mailbox-star"><a href="#"><i class="far fa-star text-secondary"></i></a></td>
                <td class="mailbox-name"><b>Budi Santoso</b></td>
                <td class="mailbox-subject"><span class="badge badge-success mr-1">&nbsp;</span> <b>Laporan Keuangan Kas Kelompok</b> — Rekap pengeluaran untuk hosting dan domain bulan ini...</td>
                <td class="mailbox-date">8:15 AM</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                <td class="mailbox-name"><b>Rizky Pratama</b></td>
                <td class="mailbox-subject"><span class="badge badge-info mr-1">&nbsp;</span> <b>Rapat Kerja Kelompok Kamis Ini</b> — Nanti sore jam 3 sore kita kumpul online via Google Meet...</td>
                <td class="mailbox-date">Yesterday</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td class="mailbox-star"><a href="#"><i class="far fa-star text-secondary"></i></a></td>
                <td class="mailbox-name"><b>Admin System</b></td>
                <td class="mailbox-subject"><span class="badge badge-warning mr-1">&nbsp;</span> <b>[BUG Fix] Perbaikan Sidebar AdminLTE</b> — Penyesuaian tema UI dan penambahan fitur datatable...</td>
                <td class="mailbox-date">Yesterday</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td class="mailbox-star"><a href="#"><i class="far fa-star text-secondary"></i></a></td>
                <td class="mailbox-name"><b>Dewi Lestari</b></td>
                <td class="mailbox-subject"><span class="badge badge-success mr-1">&nbsp;</span> <b>Deployment Production Success</b> — Server staging sudah diperbarui ke versi terbaru...</td>
                <td class="mailbox-date">May 16</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td class="mailbox-star"><a href="#"><i class="far fa-star text-secondary"></i></a></td>
                <td class="mailbox-name"><b>Andi Kurniawan</b></td>
                <td class="mailbox-subject"><span class="badge badge-primary mr-1">&nbsp;</span> <b>Catatan Hasil Diskusi UI/UX</b> — Tampilan dashboard telah disesuaikan dengan masukan...</td>
                <td class="mailbox-date">May 15</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td class="mailbox-star"><a href="#"><i class="far fa-star text-secondary"></i></a></td>
                <td class="mailbox-name"><b>Cloud Service</b></td>
                <td class="mailbox-subject"><span class="badge badge-danger mr-1">&nbsp;</span> <b>Tagihan Bulanan Layanan Cloud</b> — Total tagihan bulan ini telah diterbitkan...</td>
                <td class="mailbox-date">May 14</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection