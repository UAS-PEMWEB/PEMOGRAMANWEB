<?php $page = 'about-us'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Profile
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Profile
        @endslot
    @endcomponent

    <div class="content p-0">
        <!-- About -->
        <div class="about-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <div class="about-exp">
                                <span>DPPKB KOTA BANDUNG</span>
                            </div>
                            <div class="abt-img">
                                <img src="{{ $data->url_file }}" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h6>ABOUT Us</h6>
                            <h2>{{ $data->title }}</h2>
                            <p>
                                {!! $data->detail !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /About -->

        <!-- Visi Section -->
        <section class="work-section work-bg">			
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-heading">
                            <h2>VISI</h2>
                            <p>Di bawah ini adalah visi kami</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($visi as $item)
                    <div class="col-md-12">
                        <div class="work-box">
                            <h5>{{ $item->title }}</h5>
                            <p>{!! $item->detail !!}</p>
                            <h4>{{ $loop->iteration }}</h4>
                        </div>						
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /Visi Section -->

        <!-- Misi Section -->
        <section class="work-section work-bg">			
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-heading">
                            <h2>MISI</h2>
                            <p>Di bawah ini adalah misi kami</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($misi as $item)
                    <div class="col-md-12">
                        <div class="work-box">
                            <h5>{{ $item->title }}</h5>
                            <p>{!! $item->detail !!}</p>
                            <h4>{{ $loop->iteration }}</h4>
                        </div>						
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /Misi Section -->
    </div>
@endsection
