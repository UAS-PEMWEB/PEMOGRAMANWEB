<!-- Footer -->

<footer class="footer p-3">
    @if(!isset($showNavbar) || $showNavbar !== false)
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container footer-wrapper shadow">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/dppkb/sabrina.jpg')}}"
                                    alt="logo"></a>
                        </div>
                        <div class="footer-content">
                            <p style="color:black;">Website Perpustakaan</p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Akses Cepat</h2>
                        <ul>
                            <li>
                                <a href="{{url('galeri')}}" style="color:black;">All Gallery</a>
                            </li>
                            <li>
                                <a href="{{url('/hub-kami')}}" style="color:black;">Kontak</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-contact">
                        {{-- <h2 class="footer-title">Alamat</h2> --}}
                        <div class="footer-contact-info">
                            {{-- <div class="footer-address">
                                <p style="color:black;"><span><i class="feather-map-pin"></i></span> Jl. Maskumambang
                                    No.4, Turangga, Kec. Lengkong Kota Bandung, Jawa Barat 40264</p>
                            </div> --}}
                            <!-- <p><span><i class="feather-phone"></i></span> 321 546 8764</p> -->
                            <!-- <p class="mb-0"><span><i class="feather-mail"></i></span> truelysell@example.com</p> -->
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <!-- <h2 class="footer-title">Follow Us</h2> -->
                        <div class="social-icon">
                            <ul>
                                {{-- <li>
                                    <a href="https://www.facebook.com/dppkb.bandung/" target="_blank"><i
                                            class="fa-brands fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fab fa-twitter"></i> </a>
                                </li> --}}
                                <!-- <li>
                                    <a href="https://www.instagram.com/seamap.id/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li> -->
                            </ul>
                            {{--
                        </div>
                        <a href="https://info.flagcounter.com/Fj1y"><img
                                src="https://s01.flagcounter.com/countxl/Fj1y/bg_1D57A4/txt_FFFFFF/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_1/pageviews_1/flags_0/percent_0/"
                                alt="Flag Counter" border="0"></a>
                    </div> --}}
                    <!-- /Footer Widget -->
                </div>
            </div>

            <!-- <div class="copyright-text">
                <p class="mb-0" style="color:black;">SeaMap Oceanography &copy;
                    <script>document.write(new Date().getFullYear())</script>
                </p>
            </div> -->

        </div>
    </div>
    <!-- /Footer Top -->

    @endif
</footer>
<!-- /Footer -->