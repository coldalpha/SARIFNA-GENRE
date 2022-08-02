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
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <h5 class="card-title">Lupa Password?</h5>
                                    <p class="card-text mb-5">Masukan email yang sudah terdaftar <br> untuk mendapatkan link
                                        reset password</p>
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email"
                                                    class="form-control form-control-lg radius-30 @error('email') is-invalid @enderror"
                                                    id="email" placeholder="Masukan Email" value="{{ old('email') }}"
                                                    name="email" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid gap-3">
                                                    <button type="submit"
                                                        class="btn btn-lg btn-dark radius-30">Send</button>
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-lg btn-light radius-30">Back to Login</a>
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
