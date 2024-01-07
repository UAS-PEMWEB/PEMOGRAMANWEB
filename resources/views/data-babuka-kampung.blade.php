@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Data Oceanography <br>
            <span style="font-weight: 100"> {{ $nameVillage->name }} </span>
        @endslot
        @slot('li_1')
            Data - Data
        @endslot
        @slot('li_2')
            Data Babuka
        @endslot
    @endcomponent


    <!-- Content -->
    <div class="content">
        <div class="container">
            <form action="/data-babuka/kampungkb/{{ $nameVillage->id }}" method="get">
                <div class="d-flex gap-1 justify-content-end mb-5">
                    <div>
                        <input value="{{ request('search') }}" name="search" type="text" placeholder="Search"
                            class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">search</button>
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
                                            href="/data-babuka/kampungkb/{{ $item->village_id }}">
                                            {{ $item->village->name }}</a><span style="font-size: 16px; font-weight: 100"> by {{ $item->name }}</span></div>
                                </h3>

                                <div class="d-flex justify-content-end">
                                    <a  href="/data-babuka/{{ $item->id }}" class="btn btn-book">Detail</a>
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
