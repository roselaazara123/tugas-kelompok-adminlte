@extends('app')

@section('title', 'Compose Message')

@section('content')
<div class="card card-outline card-primary">
  <div class="card-header">
    <h3 class="card-title font-weight-normal mb-0" style="font-size: 1.25rem;">New Message</h3>
  </div>

  <div class="card-body">
    <form action="#" method="POST" enctype="multipart/form-data">
      @csrf

      <!-- To -->
      <div class="form-group">
        <label class="font-weight-normal">To</label>
        <input type="email" class="form-control" placeholder="recipient@example.com">
      </div>

      <!-- Cc & Bcc -->
      <div class="row">
        <div class="col-md-6 form-group">
          <label class="font-weight-normal">Cc</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 form-group">
          <label class="font-weight-normal">Bcc</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <!-- Subject -->
      <div class="form-group">
        <label class="font-weight-normal">Subject</label>
        <input type="text" class="form-control">
      </div>

      <!-- Message Area -->
      <div class="form-group">
        <label class="font-weight-normal">Message</label>
        <textarea class="form-control" rows="6" placeholder="Write your message..."></textarea>
        <small class="text-muted mt-1 d-block">
          Hook up a rich-text editor such as <a href="#" class="text-primary">Quill</a> or <a href="#" class="text-primary">EasyMDE</a> to upgrade this textarea.
        </small>
      </div>

      <!-- Attachments -->
      <div class="form-group mt-4">
        <label class="font-weight-normal d-block">Attachments</label>
        <div class="custom-file" style="max-width: 100%;">
          <input type="file" class="custom-file-input" id="customFile" multiple>
          <label class="custom-file-label font-weight-normal" for="customFile">Choose Files</label>
        </div>
      </div>
    </form>
  </div>

  <!-- Action Buttons -->
  <div class="card-footer bg-light d-flex justify-content-between align-items-center">
    <div>
      <button type="submit" class="btn btn-primary mr-2">
        <i class="far fa-paper-plane mr-1"></i> Send
      </button>
      <button type="button" class="btn btn-default border">
        <i class="far fa-file-alt mr-1"></i> Save draft
      </button>
    </div>
    <button type="reset" class="btn btn-outline-danger">
      <i class="fas fa-times mr-1"></i> Discard
    </button>
  </div>
</div>
@endsection

@push('scripts')
<script>
  // Untuk menampilkan nama file saat diupload
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>
@endpush