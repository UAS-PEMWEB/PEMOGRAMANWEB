@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Babuka
        @endslot
        @slot('li_1')
            Data - Data
        @endslot
        @slot('li_2')
            Babuka
        @endslot
    @endcomponent

    <div class="content p-3">
    <div class="container">
        <div class="row col-12">
            <div class="new-comment">
                <h4 class="text-center">Daftar Babuka</h4>
                <form action="{{ url('suggestions') }}" method="post">
                    @method('post') @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Name*</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="Enter Your Name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Nama Produk*</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Enter Nama Produk">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Keterangan Produk*</label>
                                <input type="text" name="address" class="form-control"
                                    placeholder="Enter Keterangan Produk">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Phone Number*</label>
                                <input type="text" name="phone_number" class="form-control"
                                    placeholder="Enter Your Phone Number">
                                @error('phone_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Kampung KB*</label>
                                <input type="text" name="address" class="form-control"
                                    placeholder="Pilih Kampung KB">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Import Gambar*</label>
                                <input type="text" name="address" class="form-control"
                                    placeholder="Import Gambar">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
@endsection
