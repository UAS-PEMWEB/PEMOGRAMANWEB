<?php $page = 'blog-details'; ?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
@slot('title')
Artikel
@endslot
@slot('li_1')
Informasi
@endslot
@slot('li_2')
Detail Artikel
@endslot
@slot('li_3')
Blog
@endslot
@endcomponent

<div class="content">
    <div class="container">

        <div class="row">

            <div class="col-lg-112 col-md-12 blog-details">

                <div class="blog-head">
                    <div class="blog-category">
                        <ul>
                            <li><span class="cat-blog">{{ $article->category->name }}</span></li>
                        </ul>
                    </div>
                    <h3>{{ $article->title}}</h3>
                    <div class="blog-category sin-post">
                        <ul>
                            <li><i class="feather-calendar me-1"></i>{{ $article->created_at->format('d M Y') }}</li>
                            <li>
                                <div class="post-author">
                                    <a href="javascript:;"><img src="{{ URL::asset('/admin_assets/img/sabrina.jpg') }}"
                                            alt="Post Author"><span>{{ $article->user->full_name }}</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="blog blog-list">
                    <div class="blog-image">
                        <a href="#"><img class="img-fluid" src="{{ $article->url_file }}" alt="Post Image"></a>
                    </div>
                    <div class="blog-content">
                        <p>{!! $article->detail !!}</p>
                    </div>
                </div>
                <!-- /Blog Post -->
            </div>
        </div>
    </div>
</div>
@endsection