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
                    <h2 class="font-weight-light text-center text-muted py-3">SARIFNA GENRE</h2>
                    <!-- timeline item 1 -->
                    <div class="row">
                        <!-- timeline item 1 event content -->
                        <div class="col py-2">
                            <div class="card radius-15 p-2">
                                <div class="card-body">
                                    <h4 class="card-title text-muted">Profile Web</h4>
                                    <img src="{{ asset('sarifna-genre.png') }}" alt="(Foto Najwa)"
                                        class="mx-auto d-block w-50 p-3">
                                    <p class="card-text text-justify" style="text-indent: 0.5in">Sarifna Genre (Sahabat
                                        Pecinta Informasi Genre) merupakan salah satu program kerja yang diimplementasikan
                                        dalam bentuk web sebagai salah satu media edukasi mengenai Progam Genre dan hal umum
                                        lainnya yang masih berketerkaitan. Diharapkan dengan adanya web ini, kita mampu
                                        meminimalisir permasalahan remaja yang masih sering terjadi. Ada berbagai macam
                                        fitur yang bisa teman-teman gunakan. Yuk tunggu apa lagi. Check it out.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-2">
                            <div class="card radius-15 p-2">
                                <div class="card-body">
                                    <h4 class="card-title text-muted">Who I Am ?</h4>
                                    <p class="card-text text-justify">Salam Genre👌🏻, Halo
                                        semuanya.
                                    </p>
                                    <img src="{{ asset('najwa.png') }}" alt="(Foto Najwa)"
                                        class="mx-auto d-block w-50 p-3">
                                    <p class="card-text text-justify" style="text-indent: 0.5in">
                                        Perkenalan, saya Najwa Ulinnuha selaku pencetus ide web "Sarifna Genre" ini.
                                        Senang sekali rasanya menjadi bermanfaat bagi masyarakat Indonesia untuk memudahkan
                                        akses edukasi melalui web yang mampu diakses dari berbagai macam portal. Tak hanya
                                        itu, saya berharap disini bisa saling berkolaborasi terutama dengan tim/mitra muda
                                        Unicef Indonesia dalam aturan Jadwalnya.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!--end page main-->
@endsection
