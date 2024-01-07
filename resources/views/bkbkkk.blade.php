@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Layanan
        @endslot
        @slot('li_1')
            Layanan
        @endslot
        @slot('li_2')
            Bidang Keluarga Berencana Ketahanan dan Kesejahteraan Keluarga
        @endslot
    @endcomponent
    
    <div class="content">
        <div class="container">
            <div class="row p-3 justify-content-end">
                @if ($data)
                    <div class="col-12">
                        @if (strpos($data->url_file, '.mp4'))
                            <video style="width:100%;" controls class="rounded">
                                <source src="{{ $data->url_file }}" type="video/mp4">
                                Your browser does not support HTML video.
                            </video>
                        @else
                            <img src="{{ $data->url_file }}" class="img-fluid rounded" alt="img"
                                style="width: 100%; height: 100%;">
                        @endif
                        <p>
                            {!! $data->detail !!}
                        </p>
                    </div>
                @else
                    <div class="col-12">
                        <p>Data Tidak Ada</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="space">
</div>
@endsection
