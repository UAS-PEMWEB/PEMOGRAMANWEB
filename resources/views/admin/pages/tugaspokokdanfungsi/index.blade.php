<?php $page = 'add-user'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @if ($data)
                <form action="{{ url('admin/tugaspokokdanfungsi/'. $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf @method('put')
                    <div class="row">
                        <div class="col-lg-7 col-sm-12 m-auto">
    
                            @component('admin.components.addpageheader')
                                @slot('addtitle')
                                   Tugas Pokok dan Fungsi
                                @endslot
                            @endcomponent
    
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Title*</label>
                                        <input value="{{ $data->title }}" type="text" class="form-control" name="title" placeholder="Enter Title ">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Detail*</label>
                                        <textarea id="editor" name="detail" class="form-control" cols="30" rows="10">{!! $data->detail !!}</textarea>
                                        @error('detail')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="col-lg-12">
                                    <div class="btn-path">
                                        <button type="submit" class="btn btn-primary "> Save </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @else
                <p>Data not found.</p>
            @endif

            <!-- Rest of your script and content -->
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let fileInput = document.getElementById('imageInput');
            let imagePreview = document.getElementById('imagePreview');
            let videoPreview = document.getElementById('videoPreview');
            if (imagePreview.src.toLowerCase().endsWith('.mp4?alt=media')) {
                videoPreview.style.display = 'block';
                videoPreview.style.marginBottom = '30px';
                imagePreview.style.display = 'none';
            } else {
                videoPreview.style.display = 'none';
                imagePreview.style.display = 'block';
            }
           
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
