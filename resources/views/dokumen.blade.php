@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Download Dokumen
        @endslot
        @slot('li_1')
            Data - Data
        @endslot
        @slot('li_2')
            Download Dokumen
        @endslot
    @endcomponent

<!-- <div class="content">
    <div class="container">
        <div class="row col-12">
            <h1>Download Documents</h1>

            <p>Click the links below to download the documents:</p>

            <a href="assets/img/dppkb/struktur.jpeg" download="document1-name.doc">Download Document 1</a>
            <br>
            <a href="assets/img/dppkb/struktur.jpeg" download="document2-name.doc">Download Document 2</a>
        </div>
    </div>
</div>  -->

<!-- <section class="categories-section p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-heading category-heading aos" data-aos="fade-up">
                    <p>Click the links below to download the documents:</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 col-12" data-aos="fade-up">
                <a href="assets/img/dppkb/struktur.jpeg" download="document1-name.doc">
                    <div class="categories-main-all">
                        <div class="categories-img">
                            <span>
                                <img src="assets/img/icons/find-icon.svg">
                            </span>
                        </div>
                        <h6>Document 1</h6>
                        <span class="category-bottom">
                            <i class="feather-chevron-right "></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> -->

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="table-resposnive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokumen</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dokumen 1</td>
                                    <td>Dokumen 1</td>
                                    <td>
                                        <a href="assets/img/dppkb/struktur.jpeg" download="document1-name.doc">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dokumen 2</td>
                                    <td>Dokumen 2</td>
                                    <td>
                                        <a href="assets/img/dppkb/struktur.jpeg" download="document2-name.doc">Download</a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
