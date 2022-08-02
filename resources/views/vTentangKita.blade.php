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
                    <h2 class="font-weight-light text-center text-muted py-3">PENDEWASAAN USIA
                        PERKAWINAN ( {{ $section }}) </h2>
                    <div class="text-muted text-center">Senin, 11 Juli 2022 7:15 AM</div>
                    <!-- timeline item 1 -->
                    <div class="row">
                        <!-- timeline item 1 event content -->
                        <div class="col py-2">
                            <div class="card radius-15 p-2">
                                <div class="card-body">
                                    <h4 class="card-title text-muted">Apa itu PUP ?</h4>
                                    <br>
                                    <p class="card-text text-justify" style="text-indent: 0.5in">Pendewasaan usia perkawinan
                                        (PUP) adalah upaya untuk
                                        meningkatkan
                                        usia pada perkawinan pertama yaitu usia minimal 21 tahun bagi perempuan dan 25 tahun
                                        bagi laki-laki,
                                        dimana pada batasan usia ini dianggap sudah siap menghadapu kehidupan keluarga dari
                                        sisi
                                        kesehatan dan perkembangan emosional. PUP ini juga merupakan bagian dari Program KB
                                        Nasional yang
                                        diharapan dapat mendukung penurunan Total Fertility Rate (TFR). Tujuan Pendewasan
                                        Usia
                                        Perkawinan (PUP) diantaranya menunda perkawinan sampai batas usia minimal untuk siap
                                        berkeluarga,
                                        mengusahakan agar kehamilan pertama terjadi pada usia yang cukup dewasa, menunda
                                        kehamilan
                                        anak pertama bila telah terjadi perkawinan dini, sampai di usia 21 tahun.
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
