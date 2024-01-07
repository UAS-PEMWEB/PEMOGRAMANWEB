<?php $page = 'login'; ?>
<?php $showNavbar = false; ?>
@extends('layout.mainlayout')
@section('content')
<style scoped>
    .content {
        height: 100vh;
        display: flex;
        align-items: center
    }
</style>
<div class="content p-5">
    <div class="container">
        <div class="row gap-5 justify-content-center align-items-center">
            <div class="col-lg-4 col-md-5">
                <img class="img-fluid" src="{{ URL::asset('/admin_assets/img/sabrina.jpg') }}" alt="img">
            </div>
            <div class="col-lg-4 col-md-7">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4 text-primary">Login</h3>
                        <form action="{{ url('auth/login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control"
                                    placeholder="Enter your username">
                                @error('username')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Enter your password">
                                    <span onclick="togglePassword()" class="toggle-password feather-eye"></span>
                                </div>
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            @if (session()->has('login-error'))
                            <div class="text-danger mb-3">{{ session('login-error') }}</div>
                            @endif
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                        <div class="col-12 col-lg-12 mx-auto mt-2">
                            <a href="{{ url('/') }}" class="btn btn-secondary w-100">Back</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var eyeIcon = document.querySelector(".toggle-password");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove("feather-eye");
            eyeIcon.classList.add("feather-eye-off"); // You may need to change this class based on your styling
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.add("feather-eye"); // You may need to change this class based on your styling
            eyeIcon.classList.remove("feather-eye-off");
        }
    }
</script>
@endsection