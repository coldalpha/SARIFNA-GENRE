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
                    <h2 class="font-weight-light text-center text-muted py-3"> {{ $section }} </h2>
                    <div class="text-muted text-center">Senin, 11 Juli 2022 7:15 AM</div>
                    <!-- timeline item 1 -->
                    <div class="row">
                        <!-- timeline item 1 event content -->
                        <div class="col py-2">
                            <div class="card radius-15 p-2">
                                <div class="card-body">
                                    <h4 class="card-title text-muted">Apa itu {{ $section }} ?</h4>

                                    <p class="card-text text-justify" style="text-indent: 0.5in">HIV (Human Immunedeficiency
                                        Virus) merupakan virus yang dapat menurunkan kekebalan tubuh.
                                        AIDS (Acquired Immunedeficiency Syndrome) merupakan gejala penyakit yang timbul
                                        karena
                                        turunnya kekebalan tubuh.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- timeline item 1 event content -->
                        <div class="col py-2">
                            <div class="card radius-15 p-2">
                                <div class="card-body">
                                    <h4 class="card-title text-muted">CARA PENCEGAHAN {{ $section }} ?</h4>
                                    <ul class="text-justify">
                                        <li><b>Abstinence</b> : belum menikah, tidak melakukan hubungan seks di luar nikah.
                                        </li>
                                        <li><b>Be Faithful</b> : setia kepada satu pasangan seks. Hindari perilaku
                                            pberganti-ganti
                                            pasangan untuk meminimalisir kemungkinan penularan HIV.</li>
                                        <li><b>Condom</b> : Gunakan kondom yang baru tiap berhubungan seks, baik melalui
                                            vagina
                                            maupun melalui dubur. kondom berpelumas, pastikan memilih pelumas yang berbahan
                                            dasar air. Hindari kondom dengan ijpelumas yang berbahan dasar minyak, karena
                                            dapat membuat kondom bocor.</li>
                                        <li><b>Drug No</b> : Menghindari penggunaan narkoba, terutama melalui jarum suntik.
                                            Selain
                                            itu, menghindari berbagi pakai jarum suntik juga dapat mencegah infeksi virus
                                            hepatitis B.</li>
                                        <li><b>Education</b> : Pemberian informasi yang benar mengenai HIV, cara penularan,
                                            pencegahan, dan pengobatannya, dapat membantu mencegah penularan HIV di
                                            masyarakat.</li>
                                    </ul>

                                    <p class="card-text text-justify" style="text-indent: 0.5in">Bagi Anda yang berisiko
                                        tinggi terinfeksi HIV tetapi terkonfirmasi negatif, dokter dapat memberikan
                                        obat pre-exposure prophylaxis (PrEP). Pada pria, prosedur sunat juga dinilai dapat
                                        mengurangi risiko
                                        infeksi HIV. Jika Anda didiagnosis positif HIV, beri tahu pasangan Anda agar ia juga
                                        menjalani tes HIV
                                        atau VCT. Didiagnosis HIV pada masa kehamilan, diskusikan dengan dokter terkait
                                        langkah
                                        penanganan selanjutnya, perencanaan persalinan, dan cara untuk mencegah penularan
                                        HIV dari ibu
                                        ke janin.
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
