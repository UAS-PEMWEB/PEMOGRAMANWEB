@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Struktur Organisasi
        @endslot
        @slot('li_1')
        @endslot
        @slot('li_2')
            Struktur Organisasi
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">
            <div class="row p-3 justify-content-end">
                <div class="col-12">
                    @if (strpos($data->url_file, '.mp4'))
                        <video style="width:100%;" controls class="rounded">
                            <source src="{{ $data->url_file }}" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                    @else
                        <img src="{{ $data->url_file }}" class="img-fluid rounded" alt="img" style="width: 100%; height: 100%;">
                    @endif
                    <p class="mt-4 mb-4">
                        {!! $data->detail !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="space">
    </div>
@endsection
