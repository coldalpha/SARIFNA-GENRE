@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Link Email Verifikasi sudah dikirim ke emailmu.') }}
                            </div>
                        @endif

                        {{ __('Sebelum melanjutkan, Silahkan cek email verifikasi di email atau bila tidak ada silahkan cek folder spam.') }}
                        {{ __('Jika kamu tidak menerima link email verifikasi') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik saya untuk mengirim Link Verifikasi lagi.') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
