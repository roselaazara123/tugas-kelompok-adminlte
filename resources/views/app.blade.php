@extends('app') <!-- atau 'layout', sesuaikan dengan nama file master-mu -->

@section('title', 'Info Box')

@section('content')
<!-- Section 1: Info Box -->
<h5 class="mb-3">Info Box</h5>
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">CPU Traffic</span>
        <span class="info-box-number">10 <small>%</small></span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Sales</span>
        <span class="info-box-number">760</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">New Members</span>
        <span class="info-box-number">2,000</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Likes</span>
        <span class="info-box-number">41,410</span>
      </div>
    </div>
  </div>
</div>

<!-- Section 2: Info Box With Custom Shadows -->
<h5 class="mt-4 mb-3">Info Box With Custom Shadows <small class="text-muted">Using Bootstrap's Shadow Utility</small></h5>
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box shadow-lg">
      <span class="info-box-icon bg-info"><i class="fas fa-cog"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">CPU Traffic</span>
        <span class="info-box-number">10 <small>%</small></span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box shadow-lg">
      <span class="info-box-icon bg-success"><i class="fas fa-shopping-cart"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Sales</span>
        <span class="info-box-number">760</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box shadow-lg">
      <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">New Members</span>
        <span class="info-box-number">2,000</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box shadow-lg">
      <span class="info-box-icon bg-danger"><i class="fas fa-thumbs-up"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Likes</span>
        <span class="info-box-number">41,410</span>
      </div>
    </div>
  </div>
</div>

<!-- Section 3: Info Box With bg-* -->
<h5 class="mt-4 mb-3">Info Box With <span class="text-danger">bg-*</span></h5>
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box bg-info">
      <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Bookmarks</span>
        <span class="info-box-number">41,410</span>
        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
        <span class="progress-description">70% Increase in 30 Days</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box bg-success">
      <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Likes</span>
        <span class="info-box-number">41,410</span>
        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
        <span class="progress-description">70% Increase in 30 Days</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box bg-warning">
      <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Events</span>
        <span class="info-box-number">41,410</span>
        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
        <span class="progress-description">70% Increase in 30 Days</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box bg-danger">
      <span class="info-box-icon"><i class="fas fa-comments"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Comments</span>
        <span class="info-box-number">41,410</span>
        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
        <span class="progress-description">70% Increase in 30 Days</span>
      </div>
    </div>
  </div>
</div>
@endsectionssss