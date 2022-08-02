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
                    <h2 class="font-weight-light text-center text-muted py-3">{{ $section }}</h2>
                    <div class="text-muted text-center">Senin, 11 Juli 2022 7:15 AM</div>
                    <!-- timeline item 1 -->
                    <div class="row">
                        <!-- timeline item 1 event content -->
                        <div class="col py-2">
                            <div class="card radius-15 p-2">
                                <div class="card-body">
                                    <h4 class="card-title text-muted">Apa itu {{ $section }} ?</h4>
                                    <br>
                                    <p class="card-text text-justify" style="text-indent: 0.5in">PERNIKAHAN/PERKAWINAN DINI
                                        (early married) adalah pernikahan yang dilakukan pada saat salah
                                        satu atau keduanya belum memenuhi usia ideal untuk menikah. Sedangkan PERNIKAHAN /
                                        PERKAWINAN ANAK adalah perkawinan yang dilakukan pada saat salah satu atau keduanya
                                        masih
                                        berusia anak, yaitu kurang dari 18 tahun.
                                    </p>
                                    <h5 class="card-title text-muted">BERAPA USIA IDEAL MENIKAH ??</h5>
                                    <br>
                                    <ul>
                                        <li>USIA IDEAL MENIKAH UNTUK
                                            PEREMPUAN ADALAH 21 TAHUN
                                            <p class="card-text text-justify">
                                                Usia 21 merupakan usia minimal menikah pada perempuan karena menentukan
                                                kesiapan
                                                fisik,
                                                terutama hamil dan melahirkan, mental dan emosi serta dimensi kesiapan
                                                lainnya.


                                            </p>
                                        </li>
                                        <li>USIA IDEAL MENIKAH UNTUK LAKI-LAKI ADALAH 25 TAHUN
                                            <p class="card-text text-justify">Pada usia 25 tahun,
                                                dengan pertimbangan perannya sebagai suami, laki-laki
                                                sudah
                                                memiliki kesiapan
                                                keuangan, dengan memiliki pendapatan/ penghasilan untuk memenuhi kebutuhan
                                                keluarga.</p>
                                        </li>
                                    </ul>

                                    <h5 class="card-title text-muted">Dampak {{ $section }} ?</h5>
                                    <br>
                                    <ol>
                                        <li>ASPEK EKONOMI DAN SOSIAL
                                            <ul>
                                                <li>Pasangan usia muda belum mampu dibebani suatu pekerjaan yang memerlukan
                                                    keterampilan
                                                    fisik, untuk mendatangkan penghasilan baginya dan mencukupi kebutuhan
                                                    keluarganya</li>
                                                <li>DAYA SAING RENDAH untuk mendapatkan pekerjaan formal dengan jenjang
                                                    karir yang baik.</li>
                                                <li>Kehilangan komunitas/ teman sepermainan karena waktu terkuras untuk
                                                    mengurus anak dan
                                                    keluarga.</li>
                                                <li>Kurang optimalnya pengasuhan anak (aspek pengetahuan/intelektual belum
                                                    siap)</li>
                                            </ul>
                                        </li>
                                        <li>ASPEK PSIKOLOGIS
                                            <ul>
                                                <li>Emosi yang tidak stabil dapat memicu retaknya hubungan rumah tangga,
                                                    memicu pertengkaran,
                                                    kekerasan di dalam rumah tangga dan berujung pada perceraian.</li>
                                                <li>RENTAN UNTUK MENDAPATKAN PERLAKUAN KEKERASAN BERBASIS GENDER</li>
                                                <li>Kondisi emosional yang labil ketika pasca melahirkan (baby blues)</li>
                                                <li>Mengalami ketidakstabilan emosi (stress/depresi) karena keinginan
                                                    pribadi yang terhambat
                                                    akibat tuntutan sebagai orangtua</li>
                                            </ul>
                                        </li>
                                        <li>DAMPAK PENDIDIKAN : Pernikahan dini cenderung menyebabkan pelakunya mengalami
                                            putus
                                            sekolah pada usia dini.</li>
                                        <li>DAMPAK KESEHATAN : Perempuan yang menikah di usia dini berisiko mengalami
                                            masalah
                                            kesahatan reproduksi seperti kanker leher rahim dan trauma fisik pada organ
                                            intim. Dampak
                                            kesehatan karena TERLALU MUDA hamil dan melahirkan (hamil pertama di usia kurang
                                            dari
                                            21 tahun)</li>
                                    </ol>
                                    <p class="card-text text-justify" style="text-indent: 0.5in"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!--end page main-->
@endsection
