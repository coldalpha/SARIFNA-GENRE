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
                            <div class="col-lg-6 bg-light d-flex align-items-center justify-content-center">
                                <img src="Salam-genre-logo-removebg-preview.png" class="img-fluid" alt="" />
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">LOGIN</h5>
                                    <p class="card-text mb-5">
                                        SAHABAT PECINTA INFORMASI GENRE
                                    </p>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">
                                                    {{ __('Email Address') }}
                                                </label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <input type="email"
                                                        class="form-control radius-30 ps-5 @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        placeholder="Masukan Email" autocomplete="email" autofocus />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="col-12">
                                                <label for="inputChoosePassword"
                                                    class="form-label">{{ __('Password') }}</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="password"
                                                        class="form-control radius-30 ps-5  @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password"
                                                        placeholder="Masukan Password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-dark">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="mb-0">
                                                    Belum Punya Akun ?
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}">{{ __('Daftar Disini') }}</a>
                                                    @endif
                                                </p>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Lupa Password ?') }}
                                                </a>
                                            @endif
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

    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/pace.min.js"></script>
@endsection
