@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Plot
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Plot
        @endslot
    @endcomponent
    @php
    use Illuminate\Support\Str;
@endphp


    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">

                    <!-- How It Works -->
                    <section class="works-five-section">
                        <div class="container">

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


                    <div class="d-flex my-3 justify-content-end">
                        <div>
                            {{ $galleries->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
