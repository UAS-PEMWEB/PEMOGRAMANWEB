@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Data Pegawai DPPKB
        @endslot
        @slot('li_1')
            Profile
        @endslot
        @slot('li_2')
            Data Pegawai DPPKB
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">
            <div class="row justify-content-center p-3">
            <!-- Search Form -->
                 <form action="#" method="GET" class="mb-3" style="max-width: 900px; margin: 0 auto;">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <!-- /Search Form -->
                <!-- Display Dynamic Data -->
                @foreach($dataPegawai as $pegawai)
                <div class="pegawai row py-5 align-items-center justify-content-center gap-5">
                    <div class="col-auto d-flex">
                        <img style="height: 160px; object-fit: cover; width: 160px; border-radius: 15px;"
                            src="{{$pegawai->photo}}"
                            alt="{{$pegawai->full_name}}">
                    </div>
                    <div class="col-auto d-flex justify-content-center justify-content-md-start" >
                    <div class="pegawai-desc-wrapper">
                        <div class="row pegawai-desc justify-content-md-start">
                            <div class="col-auto fw-bold">
                                {{$pegawai->full_name}}
                            </div>
                        </div>
                        <div class="row pegawai-desc justify-content-md-start">
                            <div class="col-auto pegawai-desc-title">
                                Email 
                            </div>
                            <div class="col-auto">
                                : {{$pegawai->email}}
                            </div>
                        </div>
                        <div class="row pegawai-desc justify-content-md-start">
                            <div class="col-auto pegawai-desc-title">
                                Position 
                            </div>
                            <div class="col-auto">
                            : {{$pegawai->position}}
                            </div>
                        </div>
                        <div class="row pegawai-desc justify-content-md-start">
                            <div class="col-auto pegawai-desc-title">
                                Periode 
                            </div>
                            <div class="col-auto">
                            : {{$pegawai->periode}}
                            </div>
                        </div>
                        <div class="row pegawai-desc justify-content-md-start">
                            <div class="col-auto pegawai-desc-title">
                                NIP 
                            </div>
                            <div class="col-auto ">
                             : {{$pegawai->nip}}
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /Display Dynamic Data -->

                <!-- Display Pagination Links -->
                <div class="pagination justify-content-end" style="margin-top: 0px !important;">
                    {{ $dataPegawai->links() }}
                </div>
                <!-- /Display Pagination Links -->
            </div>
        </div>
    </div>
@endsection
