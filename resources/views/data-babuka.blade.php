@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Plot
        @endslot
        @slot('li_1')
            Data - Data
        @endslot
        @slot('li_2')
            Plot
        @endslot
    @endcomponent

    <!-- How It Works -->
                    <section class="works-five-section">
                        <div class="container">
                            <label>
                                <h1>Gelombang</h1>
                            </label>
                            <div class="offering-five-all">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="offering-five-main">
                                            <img src="assets/img/gelombangg.png" alt="" style="border-radius: 20px;">
                                            <div class="offering-five-button">
                                            <br>
                                            </div>
                                            <a href="https://www.arcgis.com/apps/View/index.html?appid=21297dec09494eb1b29c1459c9c27cc5&extent=113.4982,-4.4474,121.0018,-1.0515" target="_blank">
                                                <button style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 5px;">Plot Gelombang</button>
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
                            <label>
                                <h1>Batimetri</h1>
                            </label>
                            <div class="offering-five-all">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="offering-five-main">
                                            <img src="assets/img/batimetri.png" alt="" style="border-radius: 20px;">
                                            <div class="offering-five-button">
                                            <br>
                                            </div>
                                            <a href="https://www.arcgis.com/apps/View/index.html?appid=dbf8159e3f29447597ac25d449e35ebf&extent=112.3006,-5.0506,127.3079,1.7431" target="_blank">
                                                <button style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 5px;">Plot Batimetri</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <!-- Isi sesuai kebutuhan -->
                                    </div>
                                </div>
                            </div>



                            <!-- Modal -->
                            <div class="modal fade" id="kontakModal" tabindex="-1" role="dialog"
                                            aria-labelledby="kontakModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content" style="max-height: max-content; overflow: hidden;">

                                                    <div class="modal-header">
                                                        <div class="d-flex justify-content-between align-items-center"
                                                            style="width : 100%;">
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
                                                                            <a class="collapsed" data-bs-toggle="collapse" href="#faq1" aria-expanded="false">
                                                                                Kecamatan Cibiru
                                                                            </a>
                                                                        </h4>
                                                                        <div id="faq1" class="card-collapse collapse">
                                                                            <ol>
                                                                                <!-- <li><a href="https://wa.me/6281234567890">John Doe: +62 812 3456 7890</a></li> -->
                                                                                <li>John Doe: <span><i class="fa-brands fa-whatsapp m-2"></i></span><a href="{{ url('/hub-kami') }}" style="color: blue;">+62 812 3456 7890</a></li>
                                                                                <li>Jane Smith: <span><i class="fa-brands fa-whatsapp m-2"></i></span><a href="{{ url('/hub-kami') }}" style="color: blue;">+62 876 5432 1098</a></li>
                                                                                <li>Alice Johnson: <span><i class="fa-brands fa-whatsapp m-2"></i></span><a href="{{ url('/hub-kami') }}" style="color: blue;">+62 890 1234 5678</a></li>
                                                                                <li>Bob Williams: <span><i class="fa-brands fa-whatsapp m-2"></i></span><a href="{{ url('/hub-kami') }}" style="color: blue;">+62 801 2345 6789</a></li>
                                                                                <li>Eve Brown: <span><i class="fa-brands fa-whatsapp m-2"></i></span><a href="{{ url('/hub-kami') }}" style="color: blue;">+62 854 7690 1231</a></li>
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
                    <!-- /How It Works -->


    <!-- Content -->
    <div class="content">
        <div class="container">
            <form action="/data-babuka" method="get">
                <label>
                    <h1>Arus</h1>
                </label>
                <div class="d-flex justify-content-between">
                    {{--  <div>
                        <a class="btn btn-outline-primary" href="{{ url('/daftar-babuka') }}"><i class="feather-users me-2"></i>Daftar</a>
                    </div>  --}}
                    <div class="d-flex gap-1 mb-5">
                        <div>
                            <input value="{{ request('search') }}" name="search" type="text" placeholder="Search"
                                class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">search</button>
                    </div>
                </div>
            </form>
            <div class="row">

                @foreach ($data as $item)
                    <div class="col-xl-3 col-md-6">
                        <div class="service-widget servicecontent">
                            <div class="service-img">
                                <a href="#" class="gallery-item">
                                    <img class="img-fluid serv-img" alt="Service Image" src="{{ $item->image }}">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="#">{{ $item->product_name }}</a>
                                    <div style="font-size: 16px; font-weight: 100">In <a class="text-primary"
                                            href="data-babuka/kampungkb/{{ $item->village_id }}">
                                            {{ $item->village->name }}</a><span style="font-size: 16px; font-weight: 100"> by {{ $item->name }}</span></div>
                                </h3>

                                <div class="d-flex justify-content-end">
                                    <a  href="data-babuka/{{ $item->id }}" class="btn btn-book">Detail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex my-3 justify-content-end">
                <div>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /Content -->
@endsection
