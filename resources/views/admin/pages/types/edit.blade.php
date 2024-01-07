<?php $page = 'add-Type'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/types/'.$data->id ) }}" method="post">
                @csrf @method('put')
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Edit Types
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input value="{{ $data->name }}" type="text" class="form-control" name="name" placeholder="Enter Your Full Name ">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description*</label>
                                    <input value="{{ $data->desc }}" type="text" class="form-control" name="desc" placeholder="Enter desc">
                                </div>
                            </div>      
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="{{ url('admin/types') }}" class="btn btn-cancel me-3">Cancel</a>
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