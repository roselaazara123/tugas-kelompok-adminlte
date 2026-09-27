@extends('layouts.app')

@section('title', 'Info Box')

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="mb-0">Info Box</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Info Box</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">

    <!-- 1. Info Box Standard -->
    <h5 class="mb-3">Info Box Standard</h5>
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
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon text-bg-danger shadow-sm"><i class="bi bi-hand-thumbs-up-fill"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">41,410</span>
          </div>
        </div>
      </div>
    </div>

    <!-- 2. Info Box With Custom Shadows -->
    <h5 class="mt-4 mb-3">Info Box With Custom Shadows <small class="text-secondary fw-normal">Using Bootstrap Shadow Utility</small></h5>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box shadow-lg">
          <span class="info-box-icon text-bg-primary"><i class="bi bi-gear-fill"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">CPU Traffic</span>
            <span class="info-box-number">10 <small>%</small></span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box shadow-lg">
          <span class="info-box-icon text-bg-success"><i class="bi bi-cart-fill"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Sales</span>
            <span class="info-box-number">760</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box shadow-lg">
          <span class="info-box-icon text-bg-warning"><i class="bi bi-people-fill"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">New Members</span>
            <span class="info-box-number">2,000</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box shadow-lg">
          <span class="info-box-icon text-bg-danger"><i class="bi bi-hand-thumbs-up-fill"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">41,410</span>
          </div>
        </div>
      </div>
    </div>

    <!-- 3. Info Box With Background Colors & Progress Bar -->
    <h5 class="mt-4 mb-3">Info Box With Background Colors</h5>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box text-bg-primary">
          <span class="info-box-icon"><i class="bi bi-bookmark-fill"></i></span>
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
        <div class="info-box text-bg-success">
          <span class="info-box-icon"><i class="bi bi-hand-thumbs-up-fill"></i></span>
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
        <div class="info-box text-bg-warning">
          <span class="info-box-icon"><i class="bi bi-calendar-event-fill"></i></span>
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
        <div class="info-box text-bg-danger">
          <span class="info-box-icon"><i class="bi bi-chat-text-fill"></i></span>
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

  </div>
</div>
@endsectionss