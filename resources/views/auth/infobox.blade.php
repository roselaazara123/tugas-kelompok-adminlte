@extends('layouts.app')

@section('title', 'Info Box')

@section('page-title', 'Info Box')

@section('content')

    <h5 class="mb-2">Info Box</h5>

    <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">

                <span class="info-box-icon text-bg-primary shadow-sm">
                    <i class="bi bi-gear-fill"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        CPU Traffic
                    </span>

                    <span class="info-box-number">
                        10
                        <small>%</small>
                    </span>
                </div>

            </div>
        </div>


        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">

                <span class="info-box-icon text-bg-success shadow-sm">
                    <i class="bi bi-cart-fill"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        Sales
                    </span>

                    <span class="info-box-number">
                        760
                    </span>
                </div>

            </div>
        </div>


        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">

                <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-people-fill"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        New Members
                    </span>

                    <span class="info-box-number">
                        2,000
                    </span>
                </div>

            </div>
        </div>


        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">

                <span class="info-box-icon text-bg-danger shadow-sm">
                    <i class="bi bi-hand-thumbs-up-fill"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        Likes
                    </span>

                    <span class="info-box-number">
                        41,410
                    </span>
                </div>

            </div>
        </div>

    </div>


    {{-- Custom Shadows --}}

    <h5 class="mt-4 mb-2">
        Info Box With Custom Shadows

        <small>
            <i>Using Bootstrap's Shadow Utility</i>
        </small>
    </h5>

    <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow-none">

                <span class="info-box-icon text-bg-primary shadow-sm">
                    <i class="bi bi-gear-fill"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        CPU Traffic
                    </span>

                    <span class="info-box-number">
                        10 <small>%</small>
                    </span>
                </div>

            </div>
        </div>


        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow-sm">

                <span class="info-box-icon text-bg-success shadow-sm">
                    <i class="bi bi-cart-fill"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        Sales
                    </span>

                    <span class="info-box-number">
                        760
                    </span>
                </div>

            </div>
        </div>


        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">

                <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-people-fill"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        New Members
                    </span>

                    <span class="info-box-number">
                        2,000
                    </span>
                </div>

            </div>
        </div>


        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow-lg">

                <span class="info-box-icon text-bg-danger shadow-sm">
                    <i class="bi bi-hand-thumbs-up-fill"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        Likes
                    </span>

                    <span class="info-box-number">
                        41,410
                    </span>
                </div>

            </div>
        </div>

    </div>


    {{-- Background Color --}}

    <h5 class="mt-4 mb-2">
        Info Box With <code>bg-*</code>
    </h5>

    <div class="row">

        @php
            $boxes = [
                [
                    'class' => 'primary',
                    'icon' => 'bookmark-fill',
                    'title' => 'Bookmarks',
                    'number' => '41,410',
                ],
                [
                    'class' => 'success',
                    'icon' => 'hand-thumbs-up',
                    'title' => 'Likes',
                    'number' => '41,410',
                ],
                [
                    'class' => 'warning',
                    'icon' => 'calendar3',
                    'title' => 'Events',
                    'number' => '41,410',
                ],
                [
                    'class' => 'danger',
                    'icon' => 'chat-text-fill',
                    'title' => 'Comments',
                    'number' => '41,410',
                ],
            ];
        @endphp

        @foreach ($boxes as $box)

            <div class="col-md-3 col-sm-6 col-12">

                <div class="info-box text-bg-{{ $box['class'] }}">

                    <span class="info-box-icon">
                        <i class="bi bi-{{ $box['icon'] }}"></i>
                    </span>

                    <div class="info-box-content">

                        <span class="info-box-text">
                            {{ $box['title'] }}
                        </span>

                        <span class="info-box-number">
                            {{ $box['number'] }}
                        </span>

                        <div class="progress">
                            <div
                                class="progress-bar"
                                style="width: 70%">
                            </div>
                        </div>

                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>

                    </div>

                </div>

            </div>

        @endforeach

    </div>


    {{-- Gradient --}}

    <h5 class="mt-4 mb-2">
        Info Box With <code>bg-gradient</code>
    </h5>

    <div class="row">

        @foreach ($boxes as $box)

            <div class="col-md-3 col-sm-6 col-12">

                <div class="info-box text-bg-{{ $box['class'] }} bg-gradient">

                    <span class="info-box-icon">
                        <i class="bi bi-{{ $box['icon'] }}"></i>
                    </span>

                    <div class="info-box-content">

                        <span class="info-box-text">
                            {{ $box['title'] }}
                        </span>

                        <span class="info-box-number">
                            {{ $box['number'] }}
                        </span>

                        <div class="progress">
                            <div
                                class="progress-bar"
                                style="width: 70%">
                            </div>
                        </div>

                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

@endsection