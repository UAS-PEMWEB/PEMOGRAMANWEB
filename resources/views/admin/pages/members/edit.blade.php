<?php $page = 'add-Member'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/members/'.$data->id ) }}" method="post" enctype="multipart/form-data">
                @csrf @method('put')
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Edit members
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Full Name*</label>
                                    <input value="{{ $data->full_name }}" type="text" class="form-control" name="full_name" placeholder="Enter Your Full Name ">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input value="{{ $data->email }}" type="text" class="form-control" name="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Position*</label>
                                    <input value="{{ $data->position }}" type="text" class="form-control" name="position" placeholder="Enter Position">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Photo*</label>
                                    <img id="imagePreview" class="my-3" src="{{ $data->photo }}" alt="Image Preview"
                                        style="width: 100%; border-radius: 10px; max-height: 500px; object-fit: cover;">
                                    <input id="imageInput" type="file" name="filegallery" placeholder="Change Image"
                                        class="d-flex py-2 form-control">
                                    @error('filegallery')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Periode*</label>
                                    <input value="{{ $data->periode }}" type="text" class="form-control" name="periode" placeholder="Enter Periode">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>NIP*</label>
                                    <input value="{{ $data->nip }}" type="text" class="form-control" name="nip" placeholder="Enter Nip">
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