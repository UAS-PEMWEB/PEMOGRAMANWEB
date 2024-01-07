<?php $page = 'add-Product'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
<form action="{{ url('admin/products') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Add Products
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Products Name">
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Image*</label>
                                    <img id="imagePreview" class="my-3" src="#" alt="Image Preview"
                                        style="display:none; width: 100%; border-radius: 10px; max-height: 500px; object-fit: cover;">
                                    <input id="imageInput" type="file" name="filegallery" placeholder="Enter your image"
                                        class="d-flex py-2 form-control">
                                        @error('filegallery')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Url link*</label>
                                    <input type="text" class="form-control" name="url_link" placeholder="Url link">
                                    @error('url_link')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="{{ url('admin/products') }}" class="btn btn-cancel me-3">Cancel</a>
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
