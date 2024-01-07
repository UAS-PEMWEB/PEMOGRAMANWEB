<?php $page = 'provider-details'; ?>
@extends('layout.mainlayout')
@section('content')

    <!-- Content -->
    <div class="content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="provider-img">
                    <img src="{{$agendases->url_file }}" class="img-fluid" alt="img" style="width: 100%; height: 100%;"> 
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="provider-info">
                    <h2>{{ $agendases->title }}</h2>
                        <p>{!! $agendases->detail !!}</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="provide-box">
                                    <div class="provide-info">
                                    @if ($agendases->category)
                                        <h6>{{ $agendases->category->name }}</h6>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content -->
@endsection
