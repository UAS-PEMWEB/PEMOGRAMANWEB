<?php $page = 'add-user'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/users/'.$data->id ) }}" method="post">
                @csrf @method('put')
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Edit Users
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Full name*</label>
                                    <input value="{{ $data->full_name }}" type="text" class="form-control" name="full_name" placeholder="Enter Your Full Name ">
                                     @error('full_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input value="{{ $data->email }}" type="text" class="form-control" name="email" placeholder="Enter Email">
                                     @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Phone Number*</label>
                                    <input value="{{ $data->phone_number }}" type="text" class="form-control" name="phone_number" placeholder="Enter your phone number">
                                     @error('phone_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <div class="pass-group">
                                        <input placeholder="Enter your new password" type="password" name="password" class="form-control pass-inputs">
                                        <span class="fas toggle-passwords fa-eye-slash"></span>
                                         @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="select">
                                        <option>Admin</option>
                                        <option>Super Admin</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="{{ url('admin/users') }}" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Save </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
