<?php $page = 'add-village'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/list-villages') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Add Village
                            @endslot
                        @endcomponent

                        <div class="row">
                            <!-- Input for name -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Village Name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Input for address -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Address*</label>
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Enter Village Address">
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Input for location -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Location*</label>
                                    <input type="text" class="form-control" name="location"
                                        placeholder="Enter Village Location">
                                    @error('location')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div onclick="getLongLat()" class="btn d-flex justify-content-center btn-primary">Get
                                    Longitude&Latitude</div>
                            </div>
                            <!-- Input for longitude -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Longitude*</label>
                                    <input type="text" class="form-control" name="longitude"
                                        placeholder="Longitude">
                                    @error('longitude')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Input for latitude -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Latitude*</label>
                                    <input type="text" class="form-control" name="latitude"
                                        placeholder="Latitude">
                                    @error('latitude')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="{{ url('admin/list-villages') }}" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        const longitude = document.querySelector('input[name="longitude"]');
        const latitude = document.querySelector('input[name="latitude"]');
        async function getLongLatDataByAddress(address) {
            try {
                const response = await fetch(
                    `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`);

                if (!response.ok) {
                    throw new Error('Unable to fetch data');
                }

                const data = await response.json();

                if (data.length === 0) {
                    throw new Error('No results found for the address');
                }

                const lon = parseFloat(data[0].lon);
                const lat = parseFloat(data[0].lat);

                return [lon, lat];
            } catch (error) {
                console.error('Error:', error.message);
                return null;
            }
        }

        // Example usage:
        const getLongLat = () => {
            const address = document.querySelector('input[name="address"]').value;
            getLongLatDataByAddress(address)
                .then(coordinates => {
                    if (coordinates) {
                        longitude.value = coordinates[0];
                        latitude.value = coordinates[1];
                        Swal.fire({
                            title: 'Success',
                            text: `Lokasi ${address} ditemukan longitude ${coordinates[0]}, latitude ${coordinates[1]}`,
                            icon: 'success',
                            confirmButtonText: 'Close'
                        })
                    } else {
                        longitude.value = '';
                        latitude.value = '';
                        Swal.fire({
                            title: 'Error!',
                            text: 'Lokasi tidak tersedia',
                            icon: 'error',
                            confirmButtonText: 'Close'
                        })
                    }
                });
        }
    </script>
@endsection
