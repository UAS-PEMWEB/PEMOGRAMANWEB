<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="{{ url('admin/index_admin') }}">
                <img src="{{ URL::asset('assets/img/dppkb/#.jpg') }}" class="img-fluid logo px-3" alt="">
            </a>
            <a href="{{ url('admin/index_admin') }}">
                <img src="{{ URL::asset('assets/img/dppkb/#.jpg') }}" width="100" class="img-fluid logo-small px-3"
                    alt="">
            </a>
        </div>
        <!-- <div class="siderbar-toggle">
            <label class="switch" id="toggle_btn">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div> -->
    </div>

    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <!-- <li class="menu-title m-0">
                    <h6>Home</h6>
                </li> -->
                <!-- <li>
                    <a class="{{ Request::is('admin/') ? 'active' : '' }}" href="{{ url('admin/') }}"><i
                            class="fe fe-grid "></i> <span>Dashboard</span></a>
                </li> -->
                <!-- <li class="menu-title m-0">
                    <h6>Profile</h6>
                </li> -->
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="#" aria-hidden="true"></i></i>
                        <span>Spanduk</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/banner') ? 'active' : '' }}"
                                href="{{ url('admin/banner') }}">Semua</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/banner/create') ? 'active' : '' }}"
                                href="{{ url('admin/banner/create') }}"><span>Buat</span></a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <a class="{{ Request::is('admin/profile') ? 'active' : '' }}" href="{{ url('admin/profile') }}"><i
                            class="fa fa-circle-user"></i></i> <span>Profile</span></a>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><i class="fa fa-trophy" aria-hidden="true"></i></i>
                        <span>Visi</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/visi') ? 'active' : '' }}"
                                href="{{ url('admin/visi') }}">All</a>
                        </li>
                        <li>
                            <a class="{{  Request::is('admin/visi/create',) ? 'active' : ''  }}"
                                href="{{ url('admin/visi/create') }}">Create</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><i class="fa fa-trophy" aria-hidden="true"></i></i>
                        <span>Misi</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/misi') ? 'active' : '' }}"
                                href="{{ url('admin/misi') }}">All</a>
                        </li>
                        <li>
                            <a class="{{  Request::is('admin/misi/create',) ? 'active' : ''  }}"
                                href="{{ url('admin/misi/create') }}">Create</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a class="{{ Request::is('admin/organitations') ? 'active' : '' }}"
                        href="{{ url('admin/organitations') }}"><i class="fa fa-users"></i> <span>Organitation
                            Structure</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/profilepejabatstruktural') ? 'active' : '' }}"
                        href="{{ url('admin/profilepejabatstruktural') }}"><i class="fas fa-user-tie"></i>
                        <span>Official Structure Profile</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/tugaspokokdanfungsi') ? 'active' : '' }}"
                        href="{{ url('admin/tugaspokokdanfungsi') }}"><i class="fas fa-tasks"></i> <span>Tugas Pokok dan
                            Fungsi</span></a>
                </li> --}}
                <!--
                {{--  <li class="menu-title">
                    <h6>PPID</h6>
                </li>  --}}

                <li>
                    <a class="{{ Request::is('admin/tentangppid') ? 'active' : '' }}"
                        href="{{ url('admin/tentangppid') }}"><i class="fa-solid fa-circle-info"></i> <span>Tentang PPID</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/daftarinformasipublik') ? 'active' : '' }}"
                        href="{{ url('admin/daftarinformasipublik') }}"><i class="fa-regular fa-rectangle-list"></i> <span>Daftar Informasi Publik</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/daftarinformasidikecualikan') ? 'active' : '' }}"
                        href="{{ url('admin/daftarinformasidikecualikan') }}"><i class="fa-regular fa-rectangle-list"></i> <span>Daftar Informasi Dikecualikan</span></a>
                </li> -->
                <!-- <li class="menu-title">
                    <h6>Content</h6>
                </li> -->
                <li class="submenu">
                    <!-- <a href="javascript:void(0);"><i class="fe fe-book"></i>
                        <span> Categories</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a> -->
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/categories') ? 'active' : '' }}"
                                href="{{ url('admin/categories') }}">All</a>
                        </li>
                        <li>
                            <a class="{{  Request::is('admin/categories/create',) ? 'active' : ''  }}"
                                href="{{ url('admin/categories/create') }}">Create</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <!-- <a href="javascript:void(0);"><i class="fe fe-sliders"></i>
                        <span>Types</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a> -->
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/types') ? 'active' : '' }}"
                                href="{{ url('admin/types') }}">All</a>
                        </li>
                        <li>
                            <a class="{{  Request::is('admin/types/create',) ? 'active' : ''  }}"
                                href="{{ url('admin/types/create') }}">Create</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="#"></i>
                        <span> Galeri Perpustakaan</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/galleries') ? 'active' : '' }}"
                                href="{{ url('admin/galleries') }}">Semua</a>
                        </li>
                        <li>
                            <a class="{{  Request::is('admin/galleries/create',) ? 'active' : ''  }}"
                                href="{{ url('admin/galleries/create') }}">Buat</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <!-- <a href="javascript:void(0);"><i class="fe fe-list"></i>
                        <span>Products</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a> -->
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/products') ? 'active' : '' }}"
                                href="{{ url('admin/products') }}">All</a>
                        </li>
                        <li>
                            <a class="{{  Request::is('admin/products/create',) ? 'active' : ''  }}"
                                href="{{ url('admin/products/create') }}">Create</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="javascript:void(0);"><i class="#"></i>
                        <span>Isi</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/contents') ? 'active' : '' }}"
                                href="{{ url('admin/contents') }}">Semua</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/contents/create') ? 'active' : '' }}"
                                href="{{ url('admin/contents/create') }}">Buat</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <!-- <a href="javascript:void(0);">
                        <i class="fe fe-map"></i>
                        <span>List SeaMap</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a> -->
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/list-villages') ? 'active' : '' }}"
                                href="{{ url('admin/list-villages') }}">All</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/list-villages/create') ? 'active' : '' }}"
                                href="{{ url('admin/list-villages/create') }}">Create</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="#"></i>
                        <span>Link Terkait</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/linkterkait') ? 'active' : '' }}"
                                href="{{ url('admin/linkterkait') }}">Semua</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/linkterkait/create') ? 'active' : '' }}"
                                href="{{ url('admin/linkterkait/create') }}"><span>Buat</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <!-- <a href="javascript:void(0);">
                        <i class="fe fe-list"></i>
                        <span>Plot Arus</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a> -->
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/linkterkait') ? 'active' : '' }}"
                                href="{{ url('admin/babukaproducts') }}">All</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/linkterkait/approved') ? 'active' : '' }}"
                                href="{{ url('admin/babukaproducts/approved') }}">Data Approved</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/linkterkait/pending') ? 'active' : '' }}"
                                href="{{ url('admin/babukaproducts/pending') }}">Data Pending</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="menu-title">
                    <h6>Layanan</h6>
                </li> --}}

                {{-- <li>
                    <a class="{{ Request::is('admin/bppp') ? 'active' : '' }}" href="{{ url('admin/bppp') }}"><i
                            class="fa-solid fa-circle-info"></i></i></i> <span>BPPP</span></a>
                </li>

                <li>
                    <a class="{{ Request::is('admin/bkbkkk') ? 'active' : '' }}" href="{{ url('admin/bkbkkk') }}"><i
                            class="fa-solid fa-circle-info"></i></i></i> <span>BKBKKK</span></a>
                </li> --}}

                <!-- <li class="menu-title">
                    <h6>User Management</h6>
                </li> -->
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="#"></i>
                        <span> Pengguna</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/users') ? 'active' : '' }}"
                                href="{{ url('admin/users') }}">Semua</a>
                        </li>
                        <li>
                            <a class="{{  Request::is('admin/users/create',) ? 'active' : ''  }}"
                                href="{{ url('admin/users/create') }}">Buat</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-users"></i>
                        <span>Members</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/members') ? 'active' : '' }}"
                                href="{{ url('admin/members') }}">All</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/members/create') ? 'active' : '' }}"
                                href="{{ url('admin/members/create') }}">Create</a>
                        </li>
                    </ul>
                </li> --}}

                <!-- <li class="menu-title">
                    <h6>Suggestions ( Kritik dan Saran )</h6>
                </li> -->

                <li class="submenu mb-5">
                    <a href="javascript:void(0);"><i class="#"></i>
                        <span>Saran</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/suggestions') ? 'active' : '' }}"
                                href="{{ url('admin/suggestions') }}">Semua</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->