<?php $page = 'user-list'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            <div class="row mb-4 justify-content-between align-items-center">
                <div class="col-auto">
                    <h5>Kritik dan Saran</h5>
                </div>
                <div class="col-auto d-flex gap-4">
                    <div class="page-headers">
                        <form action="/admin/suggestions" method="get">
                            @csrf
                            <div class="d-flex gap-1">
                                <div>
                                    <input value="{{ request('message') }}" name="message" type="text" placeholder="Search"
                                        class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary"><span><i
                                            class="fe fe-search"></i></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->phone_number }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#delete-item-{{ $item->id }}">Delete</a>
                                        </td>
                                    </tr>
                                    @component('admin.components.deletemodel')
                                        @slot('title1')
                                            Delete Kritik dan Saran
                                        @endslot
                                        @slot('id')
                                            {{ $item->id }}
                                        @endslot
                                    @endcomponent
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex my-3 justify-content-end">
                        <div>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
