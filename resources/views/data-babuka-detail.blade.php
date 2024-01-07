<?php $page = 'provider-details'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Content -->
    <div class="content">
        <div class="container">
            <div class="row align-items-center p-3">
                <div class="col-md-5">
                    <div class="provider-img">
                        <img src="{{ $data->image }}" class="img-fluid" alt="img"
                            style="width: 100%; height: 100%;">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="d-flex align-items-center">
                        <div class="p-4">
                            <h2>{{ $data->product_name }}</h2>
                            Created By {{ $data->name }}
                            @if ($data->village)
                                <h6>In <a class="text-primary"
                                    href="/data-babuka/kampungkb/{{ $data->village_id }}">
                                    {{ $data->village->name }}</a> </h6>
                            @endif
                            <p>{!! $data->product_detail !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content -->
@endsection
