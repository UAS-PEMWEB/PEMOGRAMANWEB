<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')
<!-- Banner Section -->
<section class="hero-section-two" style="background-color: #1d6ab4">
    <div class="banner-slider slider">
        @foreach ($carousels as $carousel)
        <div class="banner">
            <img class="img-fluid banner-img" src="{{ $carousel->url_file }}" alt="img">
        </div>
        @endforeach
    </div>
</section>
<!-- /Banner Section -->

{{-- <!-- Tentang DPPKB -->
<section class="app-seven-section px-3 py-5" style="background:#1d6ab4;">
    <div class="container">
        <div class="app-sec app-sec-seven p-2" style="background:#1d6ab4;">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <video class="shadow rounded" width="100%" height="100%" controls>
                        <source
                            src="https://firebasestorage.googleapis.com/v0/b/gps-tracker-3c2a1.appspot.com/o/soulmate%2FWhatsApp%20Video%202023-12-06%20at%2013.10.35.mp4?alt=media&token=ce8f660f-9963-4f26-91cf-d6dfce3f2fcc"
                            type="video/mp4">
                        <!-- <source src="{{ $data->url_file }}"> -->
                    </video>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="new-app-seven-middle">
                        <div class="heading aos" data-aos="fade-up">
                            <!-- <h2 class="text-dark">Pengumuman terbaru</h2> -->
                            <h3 style="color:white;">{{ $data->title }}</h3>

                            @if (strlen($data->detail) <= 350) <div class="text-light content-detail"> {!! $data->detail
                                !!}
                        </div>
                        @else
                        {!! substr($data->detail, 0, 400) !!}<span>......</span>
                        <!-- <div class="mb-5">
                                            <a href="{{ route('detail-pengumuman', $announcement->id) }}"
                                                class="btn btn-primary">Selengkapnya</a>
                                        </div> -->
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- /Tentang DPPKB -->

<!-- aplikasi terkait -->
<section class="categories-section p-3" style="background:#c9d7e1;">
    <div class="container" style="margin-top: 40px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-heading category-heading aos" data-aos="fade-up">
                    <h2>Aplikasi Terkait</h2>
                    <!-- <p>Berikut ini adalah aplikasi terkait</p> -->
                </div>
            </div>
        </div>
        <div class="row" style="display: flex; align-items: center; justify-content: center;">
            @foreach ($products as $product)
            <div class="col-lg-2 col-md-4 col-sm-4 col-12" data-aos="fade-up">
                <a href="{{ $product->url_link }}">
                    <div class="categories-main-all">
                        <div class="categories-img">
                            <span>
                                @if ($product->image)
                                <img src="{{ $product->image }}">
                                @else
                                <img src="assets/img/icons/categories-2.svg">
                                @endif
                            </span>
                        </div>
                        <h6>{{ $product->name }}</h6>
                        <span class="category-bottom">
                            <i class="feather-chevron-right "></i>
                        </span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /aplikasi terkait -->
--}}

{{-- <!-- How It Works -->
<section class="works-five-section">
    <div class="container">

        <div class="offering-five-all">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="offering-five-main">
                        <img src="assets/img/gelombangg.png" alt="" style="border-radius: 10px;">
                        <div class="offering-five-button">
                            <br>
                        </div>
                        <a href="https://www.arcgis.com/apps/View/index.html?appid=21297dec09494eb1b29c1459c9c27cc5&extent=113.4982,-4.4474,121.0018,-1.0515"
                            target="_blank">
                            <button
                                style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 5px;">Plot
                                Gelombang</button>
                        </a>

                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Isi sesuai kebutuhan -->
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="offering-five-all">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="offering-five-main">
                        <img src="assets/img/batimetri.png" alt="" style="border-radius: 10px;">
                        <div class="offering-five-button">
                            <br>
                        </div>
                        <a href="https://www.arcgis.com/apps/View/index.html?appid=dbf8159e3f29447597ac25d449e35ebf&extent=112.3006,-5.0506,127.3079,1.7431"
                            target="_blank">
                            <button
                                style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 5px;">Plot
                                Batimetri</button>
                        </a>

                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Isi sesuai kebutuhan -->
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="kontakModal" tabindex="-1" role="dialog" aria-labelledby="kontakModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content" style="max-height: max-content; overflow: hidden;">

                    <div class="modal-header">
                        <div class="d-flex justify-content-between align-items-center" style="width : 100%;">
                            <div class="col-auto">
                                <h5 id="kontakModalLabel">List Kontak</h5>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                                    close
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 p-4" style="max-height: 50vh; overflow: auto;">
                                <div class="faq-section">
                                    <div class="faq-card">
                                        <h4 class="faq-title">
                                            <a class="collapsed" data-bs-toggle="collapse" href="#faq1"
                                                aria-expanded="false">
                                                Kecamatan Cibiru
                                            </a>
                                        </h4>
                                        <div id="faq1" class="card-collapse collapse">
                                            <ol>
                                                <!-- <li><a href="https://wa.me/6281234567890">John Doe: +62 812 3456 7890</a></li> -->
                                                <li>John Doe: <span><i class="fa-brands fa-whatsapp m-2"></i></span><a
                                                        href="{{ url('/hub-kami') }}" style="color: blue;">+62 812 3456
                                                        7890</a></li>
                                                <li>Jane Smith: <span><i class="fa-brands fa-whatsapp m-2"></i></span><a
                                                        href="{{ url('/hub-kami') }}" style="color: blue;">+62 876 5432
                                                        1098</a></li>
                                                <li>Alice Johnson: <span><i
                                                            class="fa-brands fa-whatsapp m-2"></i></span><a
                                                        href="{{ url('/hub-kami') }}" style="color: blue;">+62 890 1234
                                                        5678</a></li>
                                                <li>Bob Williams: <span><i
                                                            class="fa-brands fa-whatsapp m-2"></i></span><a
                                                        href="{{ url('/hub-kami') }}" style="color: blue;">+62 801 2345
                                                        6789</a></li>
                                                <li>Eve Brown: <span><i class="fa-brands fa-whatsapp m-2"></i></span><a
                                                        href="{{ url('/hub-kami') }}" style="color: blue;">+62 854 7690
                                                        1231</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /How It Works --> --}}


<!-- Pengumuman Section -->
<section class="app-seven-section px-3 py-5" style="background:#ff0080;">
    <div class="container">
        <div class="app-sec app-sec-seven p-2" style="background:#ff0080;">
            @foreach ($announcements as $announcement)
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <img src="{{ $announcement->url_file }}" class="img-fluid rounded-4" alt="img"
                        style="width: 100%; height: 100%;">
                </div>
                <div class="col-lg-6 col-12">
                    <div class="new-app-seven-middle">
                        <div class="heading aos" data-aos="fade-up">
                            <h2 class="text-white">Pengumuman Buku Terbaru</h2>
                            <h3 style="color:white;">{{ $announcement->title }}</h3>

                            @if (strlen($announcement->detail) <= 350) {!! $announcement->detail !!}
                                @else
                                {!! substr($announcement->detail, 0, 400) !!}<span>......</span>
                                <div class="mb-5">
                                    <a href="{{ route('detail-pengumuman', $announcement->id) }}"
                                        class="btn btn-primary">Selengkapnya</a>
                                </div>
                                @endif

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /Pengumuman Section -->

<!-- Partners Section -->
<section class="blog-section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center aos" data-aos="fade-up">
                <div class="section-heading">
                    <br><br>
                    <h2>Referensi Perpustakaan</h2>
                </div>
            </div>
            <div class="owl-carousel partners-slider aos" data-aos="fade-up">
                @foreach ($linkterkait as $link)
                <div class="partner-img">
                    <a href="{{ $link->detail }}" target="blank"><img style="border-radius: 4px;
                                width: 100%% !important;
                                object-fit: contain;
                                margin: 0 auto;
                                height: 80px !important;" src="{{ $link->url_file }}" alt="img"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->

{{--
<!-- berita Section -->
<section class="useful-blog-section p-3">
    <div class="container" style="margin-top: 40px; margin-bottom: 20px;">
        <div class="section-heading section-heading-four" style="margin-bottom: 10px;">
            <div class="row">
                <div class="col-md-12 aos text-center" data-aos="fade-up">
                    <h2>Berita Terkini</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="gcse-search"></div>
            </div>
        </div>
    </div>
</section>
<!-- /berita Section --> --}}

<!-- Gallery -->
<section class="popular-four-section p-3">
    <div class="container">
        <div class="section-heading section-heading-four">
            <div class="row align-items-center">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <h2 class="">Gallery Perpustakaan</h2>
                </div>
                <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                    <a href="{{ url('/galeri') }}" class="btn btn-primary btn-view">LIHAT SEMUA GALERI<i
                            class="feather-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="gallery" style="overflow: hidden">
            <div class="row mb-5 gap-3 justify-content-center">
                @foreach ($galleries as $gallery)
                <div class="col-auto">
                    <a href="#" class="gallery-item" data-toggle="modal" data-target="#galleryModal{{ $gallery->id }}">
                        @if (strpos($gallery->url_file, '.mp4') !== false)
                        <video width="300" height="300" controls class="shadow image-hover-animation image-gallery">
                            <source src="{{ $gallery->url_file }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        @else
                        <img style="width: 300px; height: 300px; object-fit: cover; border-radius: 10px;"
                            src="{{ $gallery->url_file }}" alt="image"
                            class="shadow image-hover-animation image-gallery"></img>
                        @endif
                    </a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="galleryModal{{ $gallery->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="galleryModalLabel{{ $gallery->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
                        <div class="modal-content" style="max-height: max-content; overflow: hidden;">

                            <div class="modal-header">
                                <div class="d-flex justify-content-between align-items-center" style="width : 100%;">
                                    <div class="col-auto">
                                        <h5 id="galleryModalLabel{{ $gallery->id }}">{{ $gallery->title }}</h5>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                                            close
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 p-4" style="max-height: 50vh; overflow: auto;">
                                        @if (strpos($gallery->url_file, '.mp4') !== false)
                                        <video width="100%" height="auto" style="max-height: 400px; display: block;"
                                            controls>
                                            <source src="{{ $gallery->url_file }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        @else
                                        <img src="{{ $gallery->url_file }}" class="img-fluid rounded"
                                            alt="Gallery Image"
                                            style="max-width: 100%;width:100%; height: auto; border-radius: 10px;">
                                        @endif
                                    </div>
                                    <div class="col-md-6 p-4">
                                        <h6>Detail:</h6>
                                        <p>{{ $gallery->detail }}</p>
                                        <h6>Type:</h6>
                                        <p>{{ $gallery->type->name }}</p>
                                        <!-- Informasi lainnya jika ada -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- /Gallery -->

<!-- Map -->
<!-- <section class="about-us-eight-section p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 aos my-5" data-aos="fade-up">
                        <h2>Peta Kajian SeaMap</h2>
                    </div>
                    <div class="form-group">
                        <div class="map-grid">
                            <div class="filter-map">
                                <button onclick="allLocation()" class="btn px-2 btn-outline-primary mb-2">
                                    Semua
                                </button>
                                @for ($i = 0; $i < count($locations); $i++)
                                    <button onclick="filterLocation('{{ $locations[$i] }}')"
                                        class="btn px-5 btn-outline-primary mb-2 flex-shrink-0"
                                        style="width: max-content">
                                        {{ $locations[$i] }}
                                    </button>
                                @endfor
                            </div>
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
-->
<!-- /Map -->

<!-- register section -->
<!-- <section class="register-section aos p-3" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="register-content">
                    <p>SeaMap Oceanography Register</p>
                    <div class="register-btn">
                        <a href="{{ url('/daftar-babuka') }}"><i class="feather-users me-2"></i>Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!--/register section  -->

<!-- widget youtube -->
<!-- <section class="feature-section p-3">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <h2>Youtube</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                <div class="elfsight-app-f5e16930-8266-4737-93cf-c25a612682c0" data-elfsight-app-lazy></div>
            </div>
        </div>
    </div>
</section>
-->
<!-- /widget youtube -->


{{-- <div class="free-service-all">
    <div class="row aos" data-aos="fade-up">
        <div class="col-lg-6 col-12">
            <div class="free-service-nine">
                <div class="free-service-img-one">
                    <img src="assets/img/service-img-9_.jpg" alt="">
                </div>
                <div class="free-service-img-two">
                    <img src="assets/img/service-img-10_.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="free-service-bottom-content">
                <div class="section-heading section-heading-nine free-heading-nine aos" data-aos="fade-up">

                    <h2>Movie & Podcast</h2>
                </div>
                <p>Kumpulan Film dan Podcast DPPKB Kota Bandung </p>
                <a href="#" class="btn btn-primary">Lihat Halaman</a>
            </div>
        </div>
    </div>
</div> --}}



<!-- widget instragram -->
<!-- <section class="feature-section p-3">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <br>
                    <h2>Instagram</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                <div class="elfsight-app-0913abce-b00f-490e-9cfa-9cbad4c1bfb2" data-elfsight-app-lazy></div>
            </div>
        </div>
    </div>
</section>
-->
<!-- /widget instragram -->

<!-- Kritik & saran -->
<!-- <section class="about-us-eight-section p-3">
            <div class="container">
                <div class="row">
                    <div class="new-comment">
                        <h4 class="text-center">Kritik & Saran</h4>
                        <form action="{{ url('suggestions') }}" method="post">
                            @method('post') @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Name*</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Your Name">
                                        @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email*</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter Email Address">
                                        @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Phone Number*</label>
                                        <input type="text" name="phone_number" class="form-control"
                                            placeholder="Enter Your Phone Number">
                                        @error('phone_number')
        <div class="text-danger">{{ $message }}</div>
    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Address*</label>
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Enter Your Adress">
                                        @error('address')
        <div class="text-danger">{{ $message }}</div>
    @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Message*</label>
                                        <textarea name="message" rows="6" class="form-control" placeholder="Enter Your Comment Here...."></textarea>
                                    </div>
                                    @error('message')
        <div class="text-danger">{{ $message }}</div>
    @enderror
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
<!-- /Kritik & saran -->

<br> <br> <br> <br>

{{-- <!-- App Section -->
<section class="app-section">
    <div class="container">
        <div class="app-sec">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="col-md-12">
                        <div class="heading aos" data-aos="fade-up">
                            <h2>SeaMap Oceanography</h2>
                            <p>Membangun Masyarakat Kota Bandung yang Mandiri dengan Jaminan Pendidikan, Kesehatan dan
                                Sosial Budaya yang Bermutu, Adil, dan Merata Berdasarkan Nilai Agama.</p>
                            <h6>Mari Mencegah Stunting</h6>
                            <div class="scan-img">
                                <img src="assets/img/.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="downlaod-btn aos" data-aos="fade-up">
                                <a href="#" target="_blank">
                                    <img src="assets/img/googleplay.svg" alt="img">
                                </a>
                                <a href="#" target="_blank">
                                    <img src="assets/img/appstore.svg" alt="img">
                                </a>
                            </div> -->
                </div>
                <div class="col-lg-6 col-12">
                    <div class="appimg-set aos" data-aos="fade-up">
                        <img src="assets/img/dppkb/SS_2.png" class="img-fluid" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /App Section --> --}}
{{-- @foreach ($announcements as $announcement)
<!-- pop up -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" id="closePopup">&times;</span>
        <img class="img-fluid serv-img" alt="Service Image" src="{{ $announcement->url_file }}">
    </div>
</div>
@endforeach --}}

<!-- /pop up -->
@component('components.model-popup')
@endcomponent
@component('components.scrollToTop')
@endcomponent
@endsection