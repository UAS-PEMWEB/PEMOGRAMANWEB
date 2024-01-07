<?php $page = 'user-list'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            <div class="row mb-4 justify-content-between align-items-center">
                <div class="col-auto">
                    <h5>Members</h5>
                </div>
                <div class="col-auto d-flex gap-4">
                    <div class="page-headers">
                        <form action="/admin/members" method="get">
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
                    <a class="btn btn-primary" href="{{ url('admin/members/create') }}"><i class="fa fa-plus me-2"></i>Add
                        Member</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Photo</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th>Periode</th>
                                    <th>Nip</th>
                                    <th>Create By</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$loop->iteration }}</td>
                                        <td>
                                            <img style="max-width: 100px;" src="{{ $item->photo }}" alt="photo">
                                        </td>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->position }}</td>
                                        <td>{{ $item->periode }}</td>
                                        <td>{{ $item->nip }}</td>
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
                                                        <a href="{{ url('admin/members/' . $item->id) }}"
                                                            class="dropdown-item">Edit</a>
                                                    </li>
                                                    <li>
                                                        <!-- Update the href attribute to point to the correct delete URL -->
                                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-item-{{ $item->id }}">Delete</a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @component('admin.components.deletemodel')
                                        @slot('title1')
                                            Delete Members
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