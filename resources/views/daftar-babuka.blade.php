@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Daftar SeaMap
        @endslot
        @slot('li_1')
           Home
        @endslot
        @slot('li_2')
            Daftar SeaMap
        @endslot
    @endcomponent

    <div class="content p-3">
        <div class="container">
            <div class="row col-12">
                <div class="new-comment">
                    <h4 class="text-center">Daftar SeaMap</h4>
                    <form action="{{ url('/daftar-babuka') }}" method="post" enctype="multipart/form-data">
                         @csrf
                        <div class="row">
                            <!-- Other form fields -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Name*</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Product Name*</label>
                                    <input type="text" name="product_name" class="form-control" placeholder="Enter Your Product Name">
                                    @error('product_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Dropdown for "Kampung KB" -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Produk Detail*</label>
                                    <input type="text" name="product_detail" class="form-control"
                                        placeholder="Enter Your Product Detail">
                                    @error('product_detail')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone Number*</label>
                                    <input type="text" name="phone_number" class="form-control" placeholder="Enter Your Number">
                                    @error('phone_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Village*</label>
                                    <select name="village_id" class="form-control">
                                        <option value="" selected disabled>Select Village</option>
                                        @foreach($listvillages as $village)
                                            <option value="{{ $village->id }}">{{ $village->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('village_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>File*</label>
                                    <video id="videoPreview" class="my-3" src="#" alt="Video Preview"
                                        style="display:none; width: 100%; border-radius: 10px; max-height: 500px; object-fit: cover;" controls>
                                        Your browser does not support the video tag.
                                    </video>
                                    <img id="imagePreview" class="my-3" src="#" alt="Image Preview"
                                        style="display:none; width: 100%; border-radius: 10px; max-height: 500px; object-fit: cover;">
                                    <input id="imageInput" type="file" name="file" placeholder="Enter your image"
                                        class="d-flex py-2 form-control">
                                    @error('file')
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

<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Image preview
            let imageInput = document.getElementById('imageInput');
            let imagePreview = document.getElementById('imagePreview');

            imageInput.addEventListener('change', function() {
                readURL(this);
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                        imagePreview.style.display = 'block';
                    }

                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }
        });
    </script>
