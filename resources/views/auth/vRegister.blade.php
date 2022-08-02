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
                                <div class="card-body p-2 p-sm-5">
                                    <h5 class="card-title">{{ __('REGISTRASI') }}</h5>
                                    <p class="card-text mb-3">
                                        SAHABAT PECINTA INFORMASI GENRE
                                    </p>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="name" class="form-label">
                                                    {{ __('Nama Lengkap') }}
                                                </label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                    <input type="text" id="name"
                                                        class="form-control radius-30 ps-5 @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required
                                                        placeholder="Masukan Nama Anda" autocomplete="name" autofocus />
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="asal_sekolah" class="form-label">
                                                    {{ __('Asal Sekolah') }}
                                                </label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="lni lni-graduation"></i>
                                                    </div>
                                                    <input type="text" id="asal_sekolah"
                                                        class="form-control radius-30 ps-5 @error('asal_sekolah') is-invalid @enderror"
                                                        name="asal_sekolah" value="{{ old('asal_sekolah') }}" required
                                                        placeholder="Masukan Asal Sekolah" autocomplete="asal_sekolah"
                                                        autofocus />
                                                    @error('asal_sekolah')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="no_hp" class="form-label">
                                                    {{ __('Nomor Handphone') }}
                                                </label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="lni lni-phone"></i>
                                                    </div>
                                                    <input type="number" id="no_hp"
                                                        class="form-control radius-30 ps-5 @error('no_hp') is-invalid @enderror"
                                                        name="no_hp" value="{{ old('no_hp') }}" required
                                                        placeholder="Masukan Nomor Handphone" autocomplete="no_hp"
                                                        autofocus />
                                                    @error('no_hp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="email" class="form-label">
                                                    {{ __('Email Address') }}
                                                </label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <input type="email" id="email"
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
                                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="password" id="password"
                                                        class="form-control radius-30 ps-5  @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="new-password"
                                                        placeholder="Masukan Password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="password-confirm"
                                                    class="form-label">{{ __('Konfirmasi Password') }}</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="password" id="password-confirm"
                                                        class="form-control radius-30 ps-5  @error('password-confirm') is-invalid @enderror"
                                                        name="password_confirmation" required autocomplete="new-password"
                                                        placeholder="Konfirmasi Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-dark">
                                                        {{ __('Register') }}
                                                    </button>
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
