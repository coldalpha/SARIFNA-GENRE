@extends('layout.app')

@section('content')
    <!--start wrapper-->
    <div class="wrapper">
        <!--start content-->
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <h5 class="card-header text-center p-3">{{ __('Verifikasi Email Address') }}</h5>
                        <div class="row-sm-6 ">
                            <div class="card-body pt-5">
                                <img src="{{ asset('Salam-genre-logo-removebg-preview.png') }}"
                                    class="img-fluid mx-auto d-block w-25" alt="" />
                            </div>
                        </div>
                        <div class="row-sm-6">
                            <div class="card-body pb-5 px-5">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('Link Email Verifikasi sudah dikirim ke emailmu.') }}
                                    </div>
                                @endif
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <p class="text-justify">
                                        {{ __('Sebelum melanjutkan, Silahkan cek email verifikasi di Inbox Email atau bila tidak ada silahkan cek folder Spam. Jika kamu tidak menerima link email verifikasi Klik ') }}

                                        <button type="submit"
                                            class="btn btn-link p-0 m-0 align-baseline text-justify">{{ __('kirim email verifikasi lagi.') }}</button>.
                                </form>
                                </p>
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
