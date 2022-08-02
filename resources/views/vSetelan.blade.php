@extends('layout.apps')

@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{ $section }}</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $section }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="">
            <div class="">
                <div class="container py-2">
                    @if (session()->has('suksesUpdate'))
                        <div class="alert border-0 bg-light-success alert-dismissible fade show py-2" id="statusLogin">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                </div>
                                <div class="ms-3">
                                    <div class="text-success">{{ session('suksesUpdate') }}</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <!-- timeline item 1 -->
                    <div class="row">
                        <!-- timeline item 1 event content -->
                        <div class="col py-2">
                            <div class="card radius-15 p-2">
                                <div class="card-body">
                                    <h4 class="card-title text-muted">Setelan Akun</h4>
                                    <form action="{{ url('update/' . Auth::user()->email) }}" method="POST">
                                        @csrf
                                        @method('PUT')
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
                                                        name="name" value="{{ old('name', Auth::user()->name) }}"
                                                        required placeholder="Masukan Nama Anda" autocomplete="name"
                                                        autofocus />
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
                                                        name="asal_sekolah"
                                                        value="{{ old('asal_sekolah', Auth::user()->asal_sekolah) }}"
                                                        required placeholder="Masukan Asal Sekolah"
                                                        autocomplete="asal_sekolah" autofocus />
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
                                                        name="no_hp" value="{{ old('no_hp', Auth::user()->no_hp) }}"
                                                        required placeholder="Masukan Nomor Handphone" autocomplete="no_hp"
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
                                                        name="email" value="{{ old('email', Auth::user()->email) }}"
                                                        required placeholder="Masukan Email" autocomplete="email"
                                                        readonly />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-dark">
                                                        {{ __('Update') }}
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
@endsection
