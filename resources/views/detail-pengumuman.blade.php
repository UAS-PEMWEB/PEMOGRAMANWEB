<?php $page = 'provider-details'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Content -->
    <div class="content">
        <div class="container">
            <div class="row align-items-center p-3">
                <div class="col-md-5">
                    <div class="provider-img">
                        <img src="{{ $announcement->url_file }}" class="img-fluid" alt="img"
                            style="width: 100%; height: 100%;">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="d-flex align-items-center">
                        <div class="p-4">
                            <h2>{{ $announcement->title }}</h2>
                            @if ($announcement->category)
                                <h6>In {{ $announcement->category->name }} Category</h6>
                            @endif
                            <p>{!! $announcement->detail !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content -->
@endsection
