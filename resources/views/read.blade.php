@extends('app')

@section('title', 'Read Message')

@section('content')
<div class="card card-outline card-primary">
  <!-- Header Card -->
  <div class="card-header d-flex justify-content-between align-items-center">
    <h3 class="card-title font-weight-normal mb-0" style="font-size: 1.25rem;">
      Re: Revisi Modul & Tampilan AdminLTE v3
    </h3>

    <div class="card-tools">
      <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm" title="Previous"><i class="fas fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default btn-sm" title="Up"><i class="fas fa-chevron-up"></i></button>
        <button type="button" class="btn btn-default btn-sm" title="Next"><i class="fas fa-chevron-down"></i></button>
      </div>
    </div>
  </div>

  <!-- Body Card -->
  <div class="card-body">
    <!-- Profil Pengirim -->
    <div class="mailbox-read-info border-bottom pb-3 mb-4 d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <!-- Avatar Initial SN -->
        <div class="rounded-circle bg-info text-white d-flex align-items-center justify-content-center mr-3 font-weight-bold" style="width: 48px; height: 48px; font-size: 1rem; opacity: 0.9;">
          SN
        </div>
        <div>
          <h5 class="mb-0 font-weight-bold" style="font-size: 1.1rem;">Siti Nurhaliza</h5>
          <span class="text-muted" style="font-size: 0.9rem;">siti.nurhaliza@kelompok.id &mdash; to me</span>
        </div>
      </div>
      <div class="text-muted text-right" style="font-size: 0.9rem;">
        10:42 AM &middot; 15 menit yang lalu
      </div>
    </div>

    <!-- Isi Pesan (Sudah Disesuaikan) -->
    <div class="mailbox-read-message text-dark" style="line-height: 1.7; font-size: 1rem;">
      <p>Halo Tim,</p>

      <p>Saya sudah memeriksa hasil update dashboard dan modul grafik ApexCharts yang teman-teman kerjakan pagi ini. Secara keseluruhan kodenya sudah berjalan lancar, namun ada 2 poin catatan kecil yang perlu kita atur kembali:</p>

      <ol class="pl-4 my-3">
        <li class="mb-2">
          Warna kontras pada tabel <code style="color: #0d6efd; background-color: #f8f9fa; padding: 2px 4px; border-radius: 4px;">DataTables</code> terasa agak redup di mode terang. Bisakah ketebalan garis border ditambah sekitar ~10%?
        </li>
        <li class="mb-2">
          Fitur pencarian di halaman Mailbox belum terkoneksi ke backend. Mohon dicek kembali sebelum kita lakukan integrasi route akhir.
        </li>
      </ol>

      <p>Selebihnya sudah mantap sekali! Tinggal dipastikan semua link menu sidebar saling terhubung.</p>

      <p class="mb-0">Salam,</p>
      <strong>Siti Nurhaliza</strong><br>
      <small class="text-muted">Dikirim dari Laptop PM Kelompok</small>
    </div>

    <!-- Section Attachments -->
    <div class="mt-4 pt-3 border-top">
      <h6 class="font-weight-bold mb-3">Lampiran File (2)</h6>
      <div class="row">
        <!-- Attachment 1: PDF -->
        <div class="col-md-6 mb-2">
          <div class="border rounded p-3 d-flex align-items-center justify-content-between bg-light">
            <div class="d-flex align-items-center">
              <i class="fas fa-file-pdf text-danger fa-2x mr-3"></i>
              <div>
                <strong class="d-block text-dark">catatan-revisi-project.pdf</strong>
                <small class="text-muted">1.2 MB</small>
              </div>
            </div>
            <a href="#" class="btn btn-default btn-sm border"><i class="fas fa-download"></i></a>
          </div>
        </div>

        <!-- Attachment 2: PNG -->
        <div class="col-md-6 mb-2">
          <div class="border rounded p-3 d-flex align-items-center justify-content-between bg-light">
            <div class="d-flex align-items-center">
              <i class="fas fa-file-image text-success fa-2x mr-3"></i>
              <div>
                <strong class="d-block text-dark">mockup-tampilan-baru.png</strong>
                <small class="text-muted">450 KB</small>
              </div>
            </div>
            <a href="#" class="btn btn-default btn-sm border"><i class="fas fa-download"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Card -->
  <div class="card-footer bg-light d-flex justify-content-between align-items-center">
    <div>
      <a href="#" class="btn btn-primary mr-1"><i class="fas fa-reply mr-1"></i> Balas</a>
      <a href="#" class="btn btn-default border"><i class="fas fa-share mr-1"></i> Teruskan</a>
    </div>
    <div>
      <button type="button" class="btn btn-default border mr-1"><i class="fas fa-archive mr-1"></i> Arsipkan</button>
      <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt mr-1"></i> Hapus</button>
    </div>
  </div>
</div>
@endsection