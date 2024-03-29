@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
@slot('title')
Bidang DPPKB
@endslot
@slot('li_1')
Home
@endslot
@slot('li_2')
Bidang DPPKB
@endslot
@endcomponent
@php
use Illuminate\Support\Str;
@endphp
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <!-- Sort -->

                <!-- /Sort -->

                <div class="row">
                    @foreach ($bidangdppkb as $gallery)
                    <div class="col-xl-3 col-md-6">
                        <div class="service-widget servicecontent">
                            <div class="service-img">
                                <a href="#" class="gallery-item" data-toggle="modal"
                                    data-target="#galleryModal{{$gallery->id}}">
                                    @if (strpos($gallery->url_file, '.mp4') !== false)
                                    <video width="100%" height="200px" style="max-width: 100%; width:100%;" controls>
                                        <source src="{{ $gallery->url_file }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    @else
                                    <img class="img-fluid serv-img" alt="Service Image" src="{{ $gallery->url_file }}">
                                    @endif
                                </a>
                                <div class="item-info">
                                    <a href="#"><span class="item-img"><img src="{{ $gallery->url_file }}"
                                                class="avatar" alt=""
                                                style="max-height:400px important; display:none;"></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="#">{{$gallery->title}}</a>
                                </h3>
                                <div class="">
                                    <a href="#" data-toggle="modal" data-target="#galleryModal{{$gallery->id}}"
                                        class="btn btn-book">Detail</a>
                                </div>

                                <!-- Modal for each gallery -->
                                <div class="modal fade" data-backdrop="static" id="galleryModal{{$gallery->id}}"
                                    style="z-index:500000 !important" tabindex="-1" role="dialog"
                                    aria-labelledby="galleryModalLabel{{$gallery->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable"
                                        role="document">
                                        <!-- Modal content -->
                                        <div class="modal-content" style="max-height: max-content; overflow: hidden;">
                                            <!-- Modal header -->
                                            <div class="modal-header">
                                                <div class="d-flex justify-content-between align-items-center"
                                                    style="width : 100%;">
                                                    <div class="col-auto">
                                                        <h5 id="galleryModalLabel{{$gallery->id}}">{{$gallery->title}}
                                                        </h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button class="btn btn-primary" data-dismiss="modal"
                                                            aria-label="Close">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <!-- Display gallery details -->
                                                <div class="row">
                                                    <div class="col-md-6 p-4 modal-prev">
                                                        @if (strpos($gallery->url_file, '.mp4') !== false)
                                                        <video width="100%" height="200px"
                                                            style="max-width: 100%; width:100%;" controls>
                                                            <source src="{{ $gallery->url_file }}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                        @else
                                                        <img src="{{$gallery->url_file}}" class="img-fluid rounded"
                                                            alt="Gallery Image"
                                                            style="max-width: 100%; width:100%; height: auto; border-radius: 10px;">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6 p-4 modal-prev">
                                                        <h6>Detail:</h6>
                                                        <p>{!! $gallery->detail !!}</p>
                                                        <!-- <h6>Type:</h6>
                                                        <p>{{$gallery->type->name}}</p> -->
                                                        <!-- Other information if available -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex my-3 justify-content-end">
                    <div>
                        {{ $bidangdppkb->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection