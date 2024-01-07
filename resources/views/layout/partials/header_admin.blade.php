<!-- Header -->
<div class="header">
    <div class="header-left">
        <a href="{{ url('admin/index_admin') }}" class="logo">
            <img src="{{ URL::asset('/admin_assets/img/logo.jpg') }}" alt="Logo" width="30" height="30">
        </a>
        <a href="{{ url('admin/index_admin') }}" class=" logo-small">
            <img src="{{ URL::asset('/admin_assets/img/logo.jpg') }}" alt="Logo" width="30"
                height="30">
        </a>
    </div>
    <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
        <i class="fas fa-align-left"></i>
    </a>
    <div class="header-split">
        <div class="page-headers">
            {{-- <div class="search-bar">
                <span><i class="fe fe-search"></i></span>
                <input type="text" placeholder="Search" class="form-control">
            </div> --}}
        </div>
        <ul class="nav user-menu">
            <li class="nav-item  has-arrow dropdown-heads ">
                <a href="javascript:void(0);" class="win-maximize">
                    <i class="fe fe-maximize"></i>
                </a>
            </li>

            <!-- User Menu -->
            <li class="nav-item dropdown">
                <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="{{ URL::asset('/admin_assets/img/sabrina.jpg') }}"
                            width="40" alt="Admin">
                        <span class="animate-circle"></span>
                    </span>
                    <span class="user-content">
                        <span class="user-name">{{ Auth::user()->username }}</span>
                        {{-- <span class="user-details"></span> --}}
                    </span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilemenu ">
                        <div class="user-detials">
                            {{-- <a href="{{ url('admin/account') }}"> --}}
                                {{-- <span class="profile-image">
                                    <img src="{{ URL::asset('/admin_assets/img/user.jpg') }}" alt="img"
                                        class="profilesidebar">
                                </span> --}}
                                <div class="profile-content p-3">
                                    <div>{{ Auth::user()->username }}</div>
                                    <div>{{ Auth::user()->email }}</div>
                                </div>
                            {{-- </a> --}}
                        </div>
                        <div class="subscription-logout">
                           <form action="{{ url('auth/logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-primary" type="submit" style="width: 100%">logout</button>
                           </form>
                        </div>
                    </div>
                </div>
            </li>
            <!-- /User Menu -->
        </ul>
    </div>

</div>
<!-- /Header -->
