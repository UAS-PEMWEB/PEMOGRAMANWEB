<?php $page = 'index_admin'; ?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                    <div class="card">
                        <div class="card-body">
                            <div class="home-user">
                                <div class="home-userhead">
                                    <div class="home-usercount">
                                        <span><img src="{{ URL::asset('/admin_assets/img/icons/user.svg') }}"
                                                alt="img"></span>
                                        <h6>Data Pegawai</h6>
                                    </div>
                                    <div class="home-useraction">
                                        <a class="delete-table bg-white" href="javascript:void(0);"
                                            data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                            <li>
                                                <a href="{{ url('admin/members') }}" class="dropdown-item"> View</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="home-usercontent">
                                    <div class="home-usercontents">
                                        <div class="home-usercontentcount">
                                            <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}"
                                                alt="img" class="me-2">
                                                <span class="counters" data-count="{{ $memberCount }}">{{ $memberCount }}</span>
                                        </div>
                                        <h5> Jumlah Data</h5>
                                    </div>
                                    <div class="homegraph">
                                        <img src="{{ URL::asset('/admin_assets/img/graph/graph1.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                    <div class="card">
                        <div class="card-body">
                            <div class="home-user home-provider">
                                <div class="home-userhead">
                                    <div class="home-usercount">
                                        <span><img src="{{ URL::asset('/admin_assets/img/icons/user-circle.svg') }}" alt="img"></span>
                                        <h6>Kampung KB</h6>
                                    </div>
                                    <div class="home-useraction">
                                        <a class="delete-table bg-white" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                            <li>
                                                <a href="{{ url('admin/list-villages') }}" class="dropdown-item"> View</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="home-usercontent">
                                    <div class="home-usercontents">
                                        <div class="home-usercontentcount">
                                            <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}" alt="img" class="me-2">
                                            <span class="counters" data-count="{{ $listVillagesCount }}">{{ $listVillagesCount }}</span>
                                        </div>
                                        <h5> Jumlah Data</h5>
                                    </div>
                                    <div class="homegraph">
                                        <img src="{{ URL::asset('/admin_assets/img/graph/graph2.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                    <div class="card">
                        <div class="card-body">
                            <div class="home-user home-service">
                                <div class="home-userhead">
                                    <div class="home-usercount">
                                        <span><img src="{{ URL::asset('/admin_assets/img/icons/service.svg') }}"
                                                alt="img"></span>
                                        <h6>Gallery</h6>
                                    </div>
                                    <div class="home-useraction">
                                        <a class="delete-table bg-white" href="javascript:void(0);"
                                            data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                            <li>
                                                <a href="{{ url('admin/galleries') }}" class="dropdown-item"> View</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="home-usercontent">
                                    <div class="home-usercontents">
                                        <div class="home-usercontentcount">
                                            <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}"
                                                alt="img" class="me-2">
                                                <span class="counters" data-count="{{ $galleryCount }}">{{ $galleryCount }}</span>
                                        </div>
                                        <h5> Jumlah Data</h5>
                                    </div>
                                    <div class="homegraph">
                                        <img src="{{ URL::asset('/admin_assets/img/graph/graph3.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                    <div class="card">
                        <div class="card-body">
                            <div class="home-user home-subscription">
                                <div class="home-userhead">
                                    <div class="home-usercount">
                                        <span><img src="{{ URL::asset('/admin_assets/img/icons/money.svg') }}"
                                                alt="img"></span>
                                        <h6>Product</h6>
                                    </div>
                                    <div class="home-useraction">
                                        <a class="delete-table bg-white" href="javascript:void(0);"
                                            data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                            <li>
                                                <a href="{{ url('admin/products') }}" class="dropdown-item"> View</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="home-usercontent">
                                    <div class="home-usercontents">
                                        <div class="home-usercontentcount">
                                            <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}"
                                                alt="img" class="me-2">
                                                <span class="counters" data-count="{{ $productcount }}">{{ $productcount }}</span>
                                        </div>
                                        <h5> Jumlah Data</h5>
                                    </div>
                                    <div class="homegraph">
                                        <img src="{{ URL::asset('/admin_assets/img/graph/graph4.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 d-flex widget-path">
                    <div class="card">
                        <div class="card-body">
                            <div class="home-user">
                                <div class="home-head-user home-graph-header">
                                    <h2>Pengumuman Terbaru</h2>
                                </div>
                                <div class="table-responsive datatable-nofooter">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Detail</th>
                                                <th>Category</th>
                                                <th>Create By</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pengumumanContent as $index => $content)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td style="max-width: 50px" class="text-wrap">{!! substr($content->title, 0 , 15) !!}...</td>
                                                <td style="max-width: 400px" class="text-wrap">{!! substr($content->detail, 0, 25) !!}...</td>
                                                <td>{{ $content->category->name }}</td>
                                                <td>{{ $content->user->full_name }}</td>
                                                <td>
                                                    {{ $content->created_at }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 d-flex widget-path">
                    <div class="card">
                        <div class="card-body">
                            <div class="home-user">
                                <div class="home-head-user home-graph-header">
                                    <h2>Artikel Terbaru</h2>
                                </div>
                                <div class="table-responsive datatable-nofooter">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Detail</th>
                                                <th>Category</th>
                                                <th>Create By</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($artikelContent as $index => $artikel)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td style="max-width: 50px" class="text-wrap">{!! substr($artikel->title, 0 , 15) !!}...</td>
                                                <td style="max-width: 400px" class="text-wrap">{!! substr($artikel->detail, 0, 25) !!}...</td>
                                                <td>{{ $artikel->category->name }}</td>
                                                <td>{{ $artikel->user->full_name }}</td>
                                                <td>
                                                    {{ $artikel->created_at }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
</div>
                </div>
            <div class="row">
                <div class="col-lg-12 widget-path">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="home-user">
                                <div class="home-head-user home-graph-header">
                                    <h2>Content Terbaru</h2>
                                    <a href="{{ url('admin/contents') }}" class="btn btn-viewall">View All<img
                                            src="{{ URL::asset('/admin_assets/img/icons/arrow-right.svg') }}"
                                            class="ms-2" alt="img"></a>
                                </div>
                                <div class="table-responsive datatable-nofooter">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>File</th>
                                                <th>Title</th>
                                                <th>Detail</th>
                                                <th>Category</th>
                                                <th>Type</th>
                                                <th>Create By</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allContent as $index => $content)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if (!empty($content->url_file))
                                                        @if (strpos($content->url_file, '.mp4') !== false)
                                                            <video width="150" height="150" controls>
                                                                <source src="{{ $content->url_file }}" type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        @else
                                                            <img style="max-width: 75px;" src="{{ $content->url_file }}" alt="content">
                                                        @endif
                                                    @else
                                                        Tidak ada gambar
                                                    @endif
                                                </td>                                             <td style="max-width: 150px" class="text-wrap">{!! substr($content->title, 0 , 15) !!}...</td>
                                                <td style="max-width: 400px" class="text-wrap">{!! substr($content->detail, 0, 30) !!}...</td>
                                                <td>{{ $content->category->name }}</td>
                                                <td>{{ $content->type->name }}</td>
                                                <td>{{ $content->user->full_name }}</td>
                                                <td>{{ $content->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
-->