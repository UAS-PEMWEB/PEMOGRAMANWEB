@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Profile Pejabat Struktural
        @endslot
        @slot('li_1')
            Profile
        @endslot
        @slot('li_2')
            Profile Pejabat Struktural
        @endslot
    @endcomponent

    <div class="content p-0">
        <!-- About -->
        <div class="about-sec">
            <div class="container">
                @foreach($profiles as $profile)
                    <div class="row align-items-center mt-5"> <!-- Menambahkan margin top 4 -->
                        <div class="col-lg-6">
                            <div class="about-img">
                                <div class="about-exp">
                                    <span>DPPKB KOTA BANDUNG</span>
                                </div>
                                <div class="abt-img">
                                    <img src="{{ $profile->url_file }}" class="img-fluid" alt="img" >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <h2>{{ $profile->title }}</h2>
                                <h4>Jabatan : {{ $profile->category->name }}</h4>
                                <p>
                                    {!! $profile->detail !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Pagination Links -->
                <div class="row mt-4"> <!-- Menambahkan margin top 4 untuk bagian pagination -->
                    <div class="col-md-12">
                        {{ $profiles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
