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
                    <h2 class="font-weight-light text-center text-muted py-3">{{ $section }} </h2>
                    <div class="text-muted text-center">Senin, 11 Juli 2022 7:15 AM</div>
                    <!-- timeline item 1 -->
                    <div class="row">
                        <!-- timeline item 1 event content -->
                        <div class="col py-2">
                            <div class="card radius-15 p-2">
                                <div class="card-body">
                                    <h4 class="card-title text-muted">Apa itu {{ $section }} ?</h4>
                                    <p class="card-text text-justify" style="text-indent: 0.5in">Berbagai keterampilan atau
                                        kemampuan untuk dapat berperilaku positif dan beradaptasi
                                        dengan lingkungan, yang memungkinkan seseorang mampu menghadapi berbagai tuntutan
                                        dan
                                        tantangan dalam hidupnya sehari-hari secara efektif.
                                    </p>
                                    <p>Macam-macam Keterampilan Hidup, sebagai berikut</p>
                                    <ul>
                                        <li>Phisical skills ( Keterampilan Fisik )
                                            <ol style="list-style-type: none">
                                                <li>- memahami tubuh sendiri</li>
                                                <li>- Keterampilan berkomunikasi dengan tubuh sendiri</li>
                                                <li>- Keterampilan mengatur pola makan</li>
                                                <li>- Olah raga murah dan sehat</li>
                                                <li>- Keterampilan mengelola tidur untuk terapi kesehatan </li>
                                            </ol>
                                        </li>
                                        <li>Emotional skills
                                            <ol style="list-style-type: none">
                                                <li>- Keterampilan bersikap tegas</li>
                                                <li>- Keterampilan berkomunikasi dengan orang lain</li>
                                            </ol>
                                        </li>
                                        <li>Mental skills (Keterampilan mental)
                                            <ol style="list-style-type: none">
                                                <li>- Keterampilan mempercayai dan menghargai diri</li>
                                                <li>- Keterampilan berpikir positif</li>
                                                <li>- Keterampilan mengatasi stres</li>
                                                <li>- Keterampilan mengambil keputusan dan memecahkan masala</li>
                                            </ol>
                                        </li>
                                        <li>Spiritual skills
                                            <ol style="list-style-type: none">
                                                <li>Kemampuan atau keterampilan khusus yang dimiliki oleh remaja dalam
                                                    bidang non
                                                    akademik berupa kemampuan remaja dalam berwirausaha sesuai dengan bakat
                                                    dan
                                                    minatnya untuk dapat menghasilkan uang tambahan (pemberdayaan ekonomi
                                                    remaja)
                                                    sehingga remaja mampu hidup dan bekerja secara mandiri.</li>
                                            </ol>
                                        </li>
                                        <li>Adversity skills (Mengubah hambatan menjadi peluang)
                                            <ol style="list-style-type: none">
                                                <li>- Memberi tahu seberapa jauh kita mampu bertahan menghadapi kesulitan
                                                </li>
                                                <li>- Meramalkan siapa yang mampu mengatasi kesulitan dan siapa yang akan
                                                    hancur</li>
                                                <li>- Meramalkan siapa yang akan melampaoi harapan-harapan atas kinerja dan
                                                    potensi</li>
                                                <li>- mereka serta siapa yang akan gagal</li>
                                                <li>- Meramalkan siapa yang akan menyerah dan siapa yang akan bertahan</li>
                                            </ol>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!--end page main-->
@endsection
