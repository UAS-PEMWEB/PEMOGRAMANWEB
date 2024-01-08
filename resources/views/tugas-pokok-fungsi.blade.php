@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Tugas Pokok & Fungsi
        @endslot
        @slot('li_1')
            Profile
        @endslot
        @slot('li_2')
            Tugas Pokok & Fungsi
        @endslot
    @endcomponent
    <div class="content">
        <div class="container">
            <div class="row col-12 p-3">
                @if($data)
                    <h1>{{ $data->title }}</h1>
                    <br>
                    {!! $data->detail !!}
                @else
                    <p>Data tidak tersedia</p>
                @endif
            </div>
        </div>
    </div>
@endsection
