<?php $page = 'add-user'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/users') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Add Users
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Full name*</label>
                                    <input type="text" class="form-control" name="full_name"
                                        placeholder="Enter Your Full Name ">
                                    @error('full_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Username*</label>
                                    <input type="text" class="form-control" name="username"
                                        placeholder="Enter Your Username">
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Phone Number*</label>
                                    <input type="text" class="form-control" name="phone_number"
                                        placeholder="Enter your phone number">
                                    @error('phone_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Password*</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" placeholder="Enter your password" class="form-control pass-inputs">
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
