@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
@slot('title')
Agenda
@endslot
@slot('li_1')
Informasi
@endslot
@slot('li_2')
Agenda
@endslot
@endcomponent

<div class="content">
    <div class="container">
        <div class="row col-12">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            @foreach ($allagendas as $allagenda)
                            <!-- Blog Post -->
                            <div class="blog blog-list">
                                <div class="blog-image">
                                    <a href="{{ route('detail-agenda', $allagenda->id) }}"><img class="img-fluid"
                                            src="{{$allagenda->url_file }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">
                                        <ul>
                                            <li><span class="cat-blog">{{$allagenda->category->name }}</span></li>
                                            <li><i class="feather-calendar me-1"></i>{{
                                                $allagenda->created_at->format('d M Y') }}</li>
                                        </ul>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ route('detail-agenda', $allagenda->id) }}">{{
                                            $allagenda->title }}</a></h3>
                                    <p>{!! $allagenda->detail !!}</p>
                                    <div class="blog-info">
                                        <ul>
                                            <li>
                                                <div class="mb-5">
                                                    <a href="{{ route('detail-agenda', $allagenda->id) }}"
                                                        class="btn btn-primary selengkapnya-btn"
                                                        style="color: #ffffff;">Selengkapnya</a>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Blog Post -->
                            @endforeach

                            <!-- Blog Pagination -->
                            <div class="blog-pagination">
                                {{ $allagendas->links() }}
                            </div>
                            <!-- /Blog Pagination -->

                        </div>

                        <!-- Blog Sidebar -->
                        <div class="col-lg-4 col-md-12 blog-sidebar theiaStickySidebar">

                            <!-- Search -->
                            <div class="card search-widget">
                                <div class="card-body">
                                    <form class="search-form" action="{{ route('agenda.index') }}" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="search" placeholder="Cari Judul Agenda"
                                                class="form-control">
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /Search -->

                            <!-- Categories -->
                            <div class="card category-widget">
                                <div class="card-body">
                                    <h4 class="side-title">Kategori Agenda</h4>
                                    <ul class="categories">
                                        @foreach($categories as $category)
                                        <li><a href="{{ route('agenda.category', $category->name) }}">{{ $category->name
                                                }}</a></li>
                                        @endforeach
                                        <li><a href="{{ route('agenda.index') }}">Lihat Semua</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Categories -->

                            <!-- Latest Posts -->
                            <div class="card post-widget">
                                <div class="card-body">
                                    <h4 class="side-title">Agenda Terbaru</h4>
                                    <ul class="latest-posts">
                                        @foreach ($allagendas as $allagenda)

                                        <li>
                                            <div class="post-thumb">
                                                <a href="{{ route('detail-agenda', $allagenda->id) }}">
                                                    <img class="img-fluid" src="{{$allagenda->url_file }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <p><i class="feather-calendar me-1"></i>{{
                                                    $allagenda->created_at->format('d M Y') }}</i></p>
                                                <h4>
                                                    <a href="{{ route('detail-agenda', $allagenda->id) }}">{{
                                                        $allagenda->title }}</a>
                                                </h4>
                                                <p>Kategori: {{$allagenda->category->name }}</p>
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
        </div>
                                                    </div>
</div>
@endsection