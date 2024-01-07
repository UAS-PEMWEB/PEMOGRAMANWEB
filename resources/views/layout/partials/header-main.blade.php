<?php error_reporting(0); ?>
@if (!isset($showNavbar) || $showNavbar !== false)
<div class="top-bar">
    <div class="container" style="color: white;">
        <div class="row d-flex justify-content-center justify-content-md-between">

            <!-- Contact Info Column -->
            <div class="col-md-4 d-flex align-items-center">
                <i class="bi bi-calendar3 d-flex align-items-center m-2"></i>
                <div id="tampil"></div>
                <script>
                    var date = new Date();
                    var tahun = date.getFullYear();
                    var bulan = date.getMonth();
                    var tanggal = date.getDate();
                    var hari = date.getDay();
                    var jam = date.getHours();
                    var menit = date.getMinutes();
                    var detik = date.getSeconds();
                    switch (hari) {
                        case 0:
                            hari = "Minggu";
                            break;
                        case 1:
                            hari = "Senin";
                            break;
                        case 2:
                            hari = "Selasa";
                            break;
                        case 3:
                            hari = "Rabu";
                            break;
                        case 4:
                            hari = "Kamis";
                            break;
                        case 5:
                            hari = "Jum'at";
                            break;
                        case 6:
                            hari = "Sabtu";
                            break;
                    }
                    switch (bulan) {
                        case 0:
                            bulan = "Januari";
                            break;
                        case 1:
                            bulan = "Februari";
                            break;
                        case 2:
                            bulan = "Maret";
                            break;
                        case 3:
                            bulan = "April";
                            break;
                        case 4:
                            bulan = "Mei";
                            break;
                        case 5:
                            bulan = "Juni";
                            break;
                        case 6:
                            bulan = "Juli";
                            break;
                        case 7:
                            bulan = "Agustus";
                            break;
                        case 8:
                            bulan = "September";
                            break;
                        case 9:
                            bulan = "Oktober";
                            break;
                        case 10:
                            bulan = "November";
                            break;
                        case 11:
                            bulan = "Desember";
                            break;
                    }
                    var tampilTanggal =
                        " " + hari + ", " + tanggal + " " + bulan + " " + tahun;
                    document.getElementById("tampil").innerHTML = tampilTanggal;
                </script>

                <i class="bi bi-clock d-flex align-items-center m-2"></i>
                <div id="jam"></div>

                <script>
                    var tanggallengkap =
                        jam + ":" + menit + ":" + detik;
                    document.getElementById("jam").innerHTML = tanggallengkap;
                </script>
            </div>

            <!-- Social Links Column -->
            <div class="col-md-8 d-none d-md-flex align-items-center">
                <marquee> Webiste Perpustakaan Since 2023 - Present</marquee>
            </div>

        </div>
    </div>
</div>

<!-- /Header -->
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ url('/') }}" class="navbar-brand logo">
                    <img src="{{ URL::asset('/assets/img/dppkb/sabrina.jpg') }}" class="img-fluid" alt="Logo">
                </a>
                <a href="{{ url('/') }}" class="navbar-brand logo-small">
                    <img src="{{ URL::asset('/assets/img/dppkb/logo.jpg') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header pt-5 pb-5">
                    <a href="{{ url('/') }}" class="menu-logo">
                        <img src="{{ URL::asset('/assets/img/dppkb/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu">
                        <a href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="has-submenu">
                        <a class="text-dark" style="cursor: pointer">Informasi<i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ url('/list-content') }}">List Informasi</a></li>
                            <li><a href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                            <li><a href="{{ url('/agenda') }}">Agenda</a></li>
                            <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                        </ul>
                    </li>
                    {{-- <li class="has-submenu">
                        <a class="text-dark" style="cursor: pointer">Profile<i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ url('/about-us') }}">Profile, Visi & Misi</a></li>
                            <li><a href="{{ url('/struktur-organisasi') }}">Struktur Organisasi</a></li>
                            <li><a href="{{ url('/tugas-pokok-fungsi') }}">Tugas Pokok dan Fungsi</a></li>
                            <!-- <li><a href="{{ url('/profile-pejabat') }}">Profil Pejabat Struktural</a></li> -->
                            <!-- <li><a href="{{ url('/data-pegawai') }}">Data Pegawai DPPKB</a></li> -->
                        </ul>
                    </li> --}}
                    {{-- <li class="has-submenu">
                        <a href="{{ url('/bidangDPPKB') }}">Bidang DPPKB</a>
                    </li> --}}
                    {{-- <li class="has-submenu">
                        <a href="{{ url('/movie') }}">Plot</a>
                    </li> --}}
                    <!-- <li class="has-submenu">
                        <a href="{{ url('/data-babuka') }}">Plot</a>
                    </li> -->
                    <li class="has-submenu">
                        <a href="{{ url('/galeri') }}">Galeri</a>
                    </li>
                    {{-- <li><a href="{{ url('/daftar-babuka') }}">Seamap</a>
                    </li> --}}
                    {{-- <li class="has-submenu">
                        <a class="text-dark" style="cursor: pointer">SeaMap<i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ url('/data-babuka') }}">Data Oceanography</a></li>
                            <li><a href="{{ url('/daftar-babuka') }}">Daftar SeaMap</a></li>
                        </ul>
                    </li> --}}
                    <!-- <li><a href="{{ url('/layanan/bppp') }}">
                            <div class="text-wrap">
                                Dataset
                            </div>
                        </a></li> -->
                    {{-- <li class="has-submenu">
                        <a class="text-dark" style="cursor: pointer">Layanan<i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">

                            <li><a href="{{ url('/layanan/bkbkkk') }}">
                                    <div class="text-wrap">
                                        Bidang Keluarga Berencana Ketahanan dan Kesejahteraan Keluarga</div>
                                </a></li>
                        </ul>
                    </li> --}}
                    <!-- <li class="has-submenu"> -->
                    <!-- <a href="{{ url('https://ppid.bandung.go.id/') }}" target="_blank" class="text-dark" style="cursor: pointer">PPID</a> -->
                    <!-- <ul class="submenu">
                                <li><a href="{{ url('/tentang-ppid') }}">Tentang PPID</a></li>
                                <li><a href="{{ url('/daftar-info-public') }}">Daftar Informasi Publik</a></li>
                                <li><a href="{{ url('/daftar-info-kecuali') }}">Daftar Informasi Dikecualikan</a></li>
                                <li><a href="javascript:void(0);">Artikel</a></li>
                            </ul> -->
                    <!-- </li> -->
                    <li class="has-submenu">
                        <a href="{{ url('/hub-kami') }}">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{ url('/login') }}"><i
                            class="fa-regular fa-circle-user me-2"></i>Login</a>
                </li>
            </ul>
        </nav>
        @endif
    </div>
</header>
<!-- /Header -->