<?php $page = 'user-list'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            <div class="row mb-4 justify-content-between align-items-center">
                <div class="col-auto">
                    <h5>Babuka Product Pending</h5>
                </div>
                <div class="col-auto d-flex gap-4">
                    <div class="page-headers">
                        <form action="/admin/babukaproducts/pending" method="get">
                            @csrf
                            <div class="d-flex gap-1">
                                <div>
                                    <input value="{{ request('message') }}" name="search" type="text" placeholder="Search"
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
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Product Name</th>
                                    <th>Product Detail</th>
                                    <th>Kampung KB</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                        @if (!empty($item->image))
                                            @if (strpos($item->image, '.mp4') !== false)
                                                <video width="150" height="150" controls>
                                                    <source src="{{ $item->image }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else
                                                <img style="max-width: 100px;" src="{{ $item->image }}" alt="content">
                                            @endif
                                        @else
                                           Tidak ada gambar
                                        @endif
                                        </td>                                       
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->product_detail }}</td>
                                        <td>{{ $item->village->name }}</td>
                                        <td>{{ $item->phone_number }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete-item-{{ $item->id }}">Delete</a>
                                            <button class="btn btn-outline-success approveButton" data-id="{{ $item->id }}">Approve</button>
                                        </td>
                                    </tr>
                                    @component('admin.components.deletemodel')
                                        @slot('title1')
                                            Delete Babuka Product
                                        @endslot
                                        @slot('id')
                                            {{ $item->id }}
                                        @endslot
                                    @endcomponent
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <script>
                        const approveButtons = document.querySelectorAll('.approveButton');
                        approveButtons.forEach(button => {
                            button.addEventListener('click', function() {
                                const productId = this.getAttribute('data-id');
                                Swal.fire({
                                    title: 'Apakah Anda Yakin Ingin Menyetujui Produk Ini ?',
                                    icon: 'question',
                                    showCancelButton: true,
                                    confirmButtonText: 'Yakin',
                                    cancelButtonText: 'Cancel'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "{{ route('approve.product', ['id' => ':id', 'confirmation' => 'yes']) }}".replace(':id', productId);
                                    }
                                });
                            });
                        });
                        const unapproveButtons = document.querySelectorAll('.unapproveButton');
                            unapproveButtons.forEach(button => {
                                button.addEventListener('click', function() {
                                    const productId = this.getAttribute('data-id');
                                    Swal.fire({
                                        title: 'Apakah Anda yakin ingin tidak menyetujui produk ini?',
                                        icon: 'question',
                                        showCancelButton: true,
                                        confirmButtonText: 'Yakin',
                                        cancelButtonText: 'Cancel'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = "{{ route('unapprove.product', ['id' => ':id', 'confirmation' => 'yes']) }}".replace(':id', productId);
                                        }
                                    });
                                });
                            });
                    </script>
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
