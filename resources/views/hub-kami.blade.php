@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Hubungi Kami
        @endslot
        @slot('li_1')
           Home
        @endslot
        @slot('li_2')
            Hubungi Kami
        @endslot
    @endcomponent

<div class="content p-3">
    <div class="container">
        <div class="row col-12">
            <div class="new-comment">
                <h4 class="text-center">Kritik & Saran</h4>
                <form action="{{ url('suggestions') }}" method="post">
                    @method('post') @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Name*</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="Enter Your Name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Email*</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Enter Email Address">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Phone Number*</label>
                                <input type="text" name="phone_number" class="form-control"
                                    placeholder="Enter Your Phone Number">
                                @error('phone_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Address*</label>
                                <input type="text" name="address" class="form-control"
                                    placeholder="Enter Your Adress">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label">Message*</label>
                                <textarea name="message" rows="6" class="form-control" placeholder="Enter Your Comment Here...."></textarea>
                            </div>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                {{--  <!-- Faq List -->
                <div class="col-md-12 mx-auto mt-4">
                    <div class="faq-section">
                        <div class="faq-card">
                            <p class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false"><span><i class="fa-brands fa-whatsapp m-2"></i></span>Kontak Genre Stunting</a>
                            </p>
                            <div id="faqOne" class="card-collapse collapse">
                                <a href="https://api.whatsapp.com.send?phone=6281109784431">6281109784431</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Faq List -->     --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
