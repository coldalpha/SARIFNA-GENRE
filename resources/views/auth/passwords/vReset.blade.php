@extends('layout.app')

@section('content')
    <!--start wrapper-->
    <div class="wrapper">

        <!--start content-->
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
                                <img src="{{ asset('forgot-password-frent-img.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">{{ __('Reset Password') }}</h5>
                                    <p class="card-text mb-5">Kami menerima permintaan Reset Password anda <br> Silahkan
                                        masukan password baru!</p>
                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <input type="email"
                                                        class="form-control radius-30 ps-5 @error('email') is-invalid @enderror"
                                                        id="email" name="email" readonly
                                                        value="{{ $email ?? old('email') }}" autocomplete="email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Password Baru</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="password"
                                                        class="form-control radius-30 ps-5 @error('password') is-invalid @enderror"
                                                        id="password" placeholder="Enter New Password" name="password"
                                                        required autocomplete="new-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="password-confirm" class="form-label">Konfirmasi
                                                    Password</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="password" class="form-control radius-30 ps-5"
                                                        id="password-confirm" placeholder="Konfirmasi Password"
                                                        name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid gap-3">
                                                    <button type="submit"
                                                        class="btn btn-dark radius-30">{{ __('Reset Password') }}</button>
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-light radius-30">{{ __('Back To Login Password') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!--end page main-->

    </div>
    <!--end wrapper-->
@endsection
