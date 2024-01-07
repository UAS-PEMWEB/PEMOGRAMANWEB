<?php $page = 'add-gallery'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/galleries') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Add galleries
                            @endslot
                        @endcomponent
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Galleries Title*</label>
                                    <input type="text" class="form-control" name="title"
                                        placeholder="Enter Galleries Title ">
                                        @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Detail*</label>
                                    <textarea class="form-control" placeholder="Enter Galleries Detail" name="detail" cols="30" rows="10"></textarea>
                                        @error('detail')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="types_id">Type</label>
                                <select name="types_id" class="form-select" id="types_id">
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>File*</label>
                                    <video id="videoPreview" class="my-3" src="#" alt="Video Preview"
                                        style="display:none; width: 100%; border-radius: 10px; max-height: 500px; object-fit: cover;" controls>
                                        Your browser does not support the video tag.
                                    </video>
                                    <img id="imagePreview" class="my-3" src="#" alt="Image Preview"
                                        style="display:none; width: 100%; border-radius: 10px; max-height: 500px; object-fit: cover;">
                                    <input id="fileInput" type="file" name="filegallery" accept="image/*, video/*"
                                        class="d-flex py-2 form-control">
                                    @error('filegallery')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="{{ url('admin/galleries') }}" class="btn btn-cancel me-3">Cancel</a>
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
        let fileInput = document.getElementById('fileInput');
        let imagePreview = document.getElementById('imagePreview');
        let videoPreview = document.getElementById('videoPreview');

        fileInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    if (fileInput.files[0].type.includes('video')) {
                        imagePreview.style.display = 'none';
                        videoPreview.src = e.target.result;
                        videoPreview.style.display = 'block';
                    } else if (fileInput.files[0].type.includes('image')) {
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
