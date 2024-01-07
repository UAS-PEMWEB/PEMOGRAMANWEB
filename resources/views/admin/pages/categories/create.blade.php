<?php $page = 'add-Category'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/categories') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Add Categories
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Categories Name*</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Categories Name ">
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description*</label>
                                    <input type="text" class="form-control" name="desc"
                                        placeholder="Enter Your Description">
                                        @error('desc')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Icon*</label>
                                    <img id="imagePreview" class="my-3" src="#" alt="Image Preview"
                                        style="display:none; width: 100%; border-radius: 10px; max-height: 500px; object-fit: cover;">
                                    <input id="imageInput" type="file" name="fileicon" placeholder="Enter your image"
                                        class="d-flex py-2 form-control">
                                    @error('fileicon')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="{{ url('admin/categories') }}" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Save </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
@endsection