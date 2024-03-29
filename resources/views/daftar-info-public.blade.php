@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Daftar Informasi Publik
        @endslot
        @slot('li_1')
           PPID
        @endslot
        @slot('li_2')
            Daftar Informasi Publik
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
