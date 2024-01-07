<?php $page = 'add-user'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/profilepejabatstruktural') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Add Profile Pejabat
                            @endslot
                        @endcomponent

                        <div class="row">

                            <div class="col-lg-12">
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
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title ">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Detail*</label>
                                    <textarea id="editor" name="detail" class="form-control" cols="30" rows="10"></textarea>
                                    @error('detail')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category*</label>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="{{ url('admin/profilepejabatstruktural') }}" class="btn btn-cancel me-3">Cancel</a>
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
            let videoPreview = document.getElementById('videoPreview');

            imageInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    if (imageInput.files[0].type.includes('video')) {
                        imagePreview.style.display = 'none';
                        videoPreview.src = e.target.result;
                        videoPreview.style.display = 'block';
                    } else if (imageInput.files[0].type.includes('image')) {
                        videoPreview.style.display = 'none';
                        imagePreview.src = e.target.result;
                        imagePreview.style.display = 'block';
                    }
                };

                reader.readAsDataURL(this.files[0]); // convert to base64 string
            }
        });
        });
    </script>
@endsection
