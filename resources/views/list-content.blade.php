<?php $page = 'blog-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            List Informasi
        @endslot
        @slot('li_1')
            Informasi
        @endslot
        @slot('li_2')
            List Informasi
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    @foreach ($artikels as $artikel)
                        <!-- Blog Post -->
                        <div class="blog blog-list">
                            <div class="blog-image">
                                <a href="{{ route('artikel.showartikel', ['id' => $artikel->id]) }}"><img class="img-fluid"
                                        src="{{ $artikel->url_file }}" alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-category">
                                    <ul>
                                        <li><span class="cat-blog">{{ $artikel->category->name }}</span> In
                                            {{ $artikel->type->name }}</li>
                                        <li><i class="feather-calendar me-1"></i>{{ $artikel->created_at->format('d M Y') }}
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog-title"><a
                                        href="{{ route('artikel.showartikel', ['id' => $artikel->id]) }}">{{ $artikel->title }}</a>
                                </h3>
                                <p>
                                    @if (strlen($artikel->detail) <= 350)
                                        {!! $artikel->detail !!}
                                    @else
                                        {!! substr($artikel->detail, 0, 350) !!}
                                        <a href="{{ 
                                            $artikel->type->name == 'Artikel' ? 
                                                route('artikel.showartikel', ['id' => $artikel->id]) : 
                                                ($artikel->type->name == 'Pengumuman' ? 
                                                    route('detail-pengumuman', ['id' => $artikel->id]) : 
                                                    route('detail-agenda', ['id' => $artikel->id])
                                                )
                                        }}">
                                            <strong>Lihat Selengkapnya</strong>
                                        </a>
                                        
                                    @endif
                                </p>
                                
                            </div>
                        </div>
                        <!-- /Blog Post -->
                    @endforeach

                    <div class="blog-pagination float-end mb-5">
                        {{ $artikels->links() }}
                    </div>
                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4 col-md-12 blog-sidebar theiaStickySidebar">

                    <!-- Search -->
                    <div class="card search-widget">
                        <div class="card-body">
                            <form class="search-form"action="{{ route('list-content') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" placeholder="Cari Judul Informasi"
                                        class="form-control">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Search -->

                    <!-- Categories -->
                    <div class="card category-widget">
                        <div class="card-body">
                            <h4 class="side-title">Kategori Informasi</h4>
                            <ul class="categories">
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('list-content.category', $category->name) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                                <li><a href="{{ route('list-content') }}">Lihat Semua</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Categories -->

                    <!-- Latest Posts -->
                    <div class="card post-widget">
                        <div class="card-body">
                            <h4 class="side-title">Informasi Terbaru</h4>
                            <ul class="latest-posts">
                                @foreach ($artikelpagination as $artikelnew)
                                    <li>
                                        <div class="post-thumb">
                                            @if ($artikelnew->type->name == 'artikel')
                                                <a href="{{ route('artikel.showartikel', ['id' => $artikelnew->id]) }}">
                                                    <img class="img-fluid" src="{{ $artikelnew->url_file }}"
                                                        alt="">
                                                </a>
                                            @elseif ($artikelnew->type->name == 'pengumuman')
                                                <a href="{{ route('detail-pengumuman', ['id' => $artikelnew->id]) }}"> <img
                                                        class="img-fluid" src="{{ $artikelnew->url_file }}" alt="">
                                                </a>
                                            @elseif ($artikelnew->type->name == 'agenda')
                                                <a href="{{ route('detail-agenda', ['id' => $artikelnew->id]) }}"> <img
                                                        class="img-fluid" src="{{ $artikelnew->url_file }}" alt="">
                                                </a>
                                            @endif

                                        </div>
                                        <div class="post-info">
                                            <p>{{ $artikelnew->created_at->format('d M Y') }}</p>
                                            <h4>
                                                <a
                                                    href="{{ route('artikel.showartikel', ['id' => $artikel->id]) }}">{{ $artikelnew->title }}</a>
                                            </h4>
                                            <!-- Menampilkan nama kategori -->
                                            <p>Kategori: {{ $artikelnew->category->name }} in
                                                {{ $artikelnew->type->name }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /Latest Posts -->
                </div>
                <!-- /Blog Sidebar -->
            </div>
        </div>
    </div>
@endsection
