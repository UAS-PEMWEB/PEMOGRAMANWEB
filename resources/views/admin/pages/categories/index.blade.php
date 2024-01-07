<?php $page = 'user-list'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            <div class="row mb-4 justify-content-between align-items-center">
                <div class="col-auto">
                    <h5>Categories</h5>
                </div>
                <div class="col-auto d-flex gap-4">
                    <div class="page-headers">
                        <form action="/admin/categories" method="get">
                            @csrf
                            <div class="d-flex gap-1">
                                <div>
                                    <input value="{{ request('search') }}" name="search" type="text" placeholder="Search"
                                        class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary"><span><i
                                            class="fe fe-search"></i></span></button>
                            </div>
                        </form>
                    </div>
                    <a class="btn btn-primary" href="{{ url('admin/categories/create') }}"><i
                            class="fa fa-plus me-2"></i>Add
                        Category</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Create By</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if (!empty($item->icon))
                                                @if (strpos($item->icon, '.mp4') !== false)
                                                    <video width="150" height="150" controls>
                                                        <source src="{{ $item->icon }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @else
                                                    <img style="max-width: 75px;" src="{{ $item->icon }}"
                                                        alt="content">
                                                @endif
                                            @else
                                                Tidak ada gambar
                                            @endif
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td style="max-width: 400px" class="text-wrap">{{ $item->desc }}</td>
                                        <td>{{ $item->user->full_name }}</td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <a class="delete-table" href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="true">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="{{ url('admin/categories/' . $item->id) }}"
                                                            class="dropdown-item">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete-item-{{ $item->id }}">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @component('admin.components.deletemodel')
                                        @slot('title1')
                                            Delete Categories {{ $item->id }}
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
