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
                    <h2 class="font-weight-light text-center text-muted py-3">{{ $section }} <br>(NARKOTIKA,
                        PSIKOTROPIKA,
                        dan ZAT/BAHAN ADIKTIF lainnya) </h2>
                    <div class="text-muted text-center">Senin, 11 Juli 2022 7:15 AM</div>
                    <!-- timeline item 1 -->
                    <div class="row">
                        <!-- timeline item 1 event content -->
                        <div class="col py-2">
                            <div class="card radius-15 p-2">
                                <div class="card-body">
                                    <h4 class="card-title text-muted">Narkotika</h4>

                                    <p class="card-text text-justify" style="text-indent: 0.5in">NARKOTIKA adalah suatu zat
                                        atau obat yang berasal dari tanaman maupun bukan tanaman baik
                                        sintesis maupun semi sintesis yang menyebabkan penurunan dan perubahan kesadaran,
                                        mengurangi dan menghilangkan rasa nyeri serta dapat menimbulkan ketergantungan
                                        secara fisik
                                        maupun psikologi.
                                    </p>
                                    <h5 class="card-title text-muted">Golongan Narkotika</h5>
                                    <ol class="text-justify">
                                        <li>NARKOTIKA GOLONGAN I adalah Narkotika yang hanya dapat digunakan untuk tujuan
                                            pengembangan ilmu pengetahuan dan tidak digunakan dalam terapi, serta mempunyai
                                            potensi sangat tinggi mengakibatkan ketergantungan. Contoh: heroin, kokain,
                                            ganja.</li>
                                        <li>NARKOTIKA GOLONGAN II adalah Narkotika berkhasiat pengobatan digunakan sebagai
                                            pilihan terakhir dan dapat digunakan dalam terapi dan/atau untuk tujuan
                                            pengembangan
                                            ilmu pengetahuan serta mempunyai potensi tinggi mengakibatkan ketergantungan.
                                            Contoh:
                                            morfin, petidin, turunan garam dalam golongan tertentu.</li>
                                        <li>NARKOTIKA GOLONGAN III adalah Narkotika berkhasiat pengobatan digunakan sebagai
                                            pilihan terakhir dan dapat digunakan dalam terapi dan/atau untuk tujuan
                                            pengembangan
                                            ilmu pengetahuan serta mempunyai potensi tinggi mengakibatkan ketergantungan.
                                            Contoh:
                                            morfin, petidin, turunan garam dalam golongan tertentu.</li>
                                    </ol>

                                    <h4 class="card-title text-muted">PSIKOTROPIKA</h4>

                                    <p class="card-text text-justify" style="text-indent: 0.5in"> PSIKOTROPIKA adalah setiap
                                        bahan baik alami ataupun buatan bukan Narkotika, yang berkhasiat
                                        psikoaktif mempunyai pengaruh selektif pada susunan saraf pusat yang menyebabkan
                                        perubahan khas pada aktifitas mental dan perilaku.
                                    </p>
                                    <h5 class="card-title text-muted">Golongan Psikotropika</h5>
                                    <ol class="text-justify">
                                        <li>PSIKOTROPIKA GOLONGAN I adalah psikotropika yang hanya digunakan untuk tujuan
                                            ilmu
                                            pengetahuan dan tidak digunakan dalam terapi, serta mempunyai potensi yang amat
                                            kuat
                                            mengakibatkan sindroma ketergantungan. Yang termasuk golongan ini yaitu: MDMA,
                                            ekstasi,
                                            LSD, ST. </li>
                                        <li>PSIKOTROPIKA GOLONGAN II adalah psikotropika yang berkhasiat untuk pengobatan
                                            dan dapat
                                            digunakan dalam terapi dan atau untuk tujuan ilmu pengetahuan serta mempunyai
                                            potensi
                                            kuat menimbulkan ketergantungan. Contoh: amfetamin, fensiklidin, sekobarbital,
                                            metakualon,
                                            metilfenidat (Ritalin)</li>
                                        <li>PSIKOTROPIKA GOLONGAN III adalah psikotropika yang berkhasiat pengobatan dan
                                            banyak
                                            digunakan dalam terapi dan atau untuk tujuan ilmu pengetahuan serta mempunyai
                                            potensi
                                            sedang menyebabkan ketergantungan. Contoh : fenobarbital dan flunitrasepam.</li>
                                        <li>PSIKOTROPIKA GOLONGAN IV adalah psikotropika yang mempunyai khasiat pengobatan
                                            dan
                                            sangat luas digunakan dalam terapi dan atau untuk tujuan ilmu pengetahuan serta
                                            mempunyai
                                            potensi ringan mengakibatkan ketergantungan. Contoh: diazepam, klobazam,
                                            bromazepam,
                                            klonazepam, khlordiazepoxiase, nitrazepam (BK, DUM)</li>
                                    </ol>

                                    <h4 class="card-title text-muted">ZAT ADIKTIF</h4>

                                    <p class="card-text text-justify" style="text-indent: 0.5in">. ZAT ADIKTIF merupakan
                                        penghantar untuk memasuki dunia penyalahgunaan Narkoba. Pada
                                        mulanya seseorang menyicip zat adiktif ini sebelum menjadi pecandu aktif. Zat
                                        adiktif yang akrab
                                        di telinga masyarakat adalah nikotin dalam rokok dan etanol dalam minuman beralkohol
                                        dan
                                        pelarut lain yang mudah menguap seperti aseton, thiner dan lain-lain.
                                    </p>
                                    <h5 class="card-title text-muted">Golongan Narkotika</h5>
                                    <ol class="text-justify">
                                        <li>GOLONGAN A adalah minuman beralkohol dengan kadar etanol 1% - 5%. Contoh: bir,
                                            greend
                                            sand.</li>
                                        <li>GOLONGAN B adalah minuman beralkohol dengan kadar etanol 5% - 20%. Contoh:
                                            anggur
                                            kolesom.</li>
                                        <li>GOLONGAN C adalah minuman beralkohol dengan kadar etanol 20% - 55%. Contoh:
                                            arak, wisky,
                                            vodka.</li>
                                    </ol>
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#ppn" aria-expanded="false"
                                                    aria-controls="ppn">
                                                    Penggolongan Pemakai Napza
                                                </button>
                                            </h2>
                                            <div id="ppn" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ol class="text-justify">
                                                        <li>PEMAKAI COBA-COBA, untuk memenuhi rasa ingin tahu atau agar
                                                            diakui oleh kelompok.</li>
                                                        <li>PEMAKAI SOSIAL ATAU REKREASI, untuk bersenang-senang, pada saat
                                                            rekreasi atau bersantai,
                                                            umumnya dilakukan dalam kelompok.</li>
                                                        <li>PEMAKAI SITUASIONAL, untuk menghilangkan perasaan stress dan
                                                            depresi (ketegangan,
                                                            kesedihan dan kekecewaan).</li>
                                                        <li>PEMAKAI KETERGANTUNGAN, pemakai yang berulang dan mencari NAPZA
                                                            sebagai kebutuhan
                                                            sehari-hari sehingga melakukan apapun untuk mendapatkannya.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#tkp" aria-expanded="false"
                                                    aria-controls="tkp">
                                                    Tahap Ketergantungan Napza
                                                </button>
                                            </h2>
                                            <div id="tkp" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="text-justify">
                                                        <li>KOMPROMI, tidak tegas, mau bergaul dengan pemakai NAPZA.</li>
                                                        <li>COBA-COBA, segan menolak tawaran, sehingga ikut-ikutan mencoba.
                                                        </li>
                                                        <li>TOLERANSI, sudah memakai beberapa kali, tubuh menjadi toleran.
                                                            Perlu penambahan dosis lebih
                                                            besar agar mendapatkan efek yang dikehendaki.</li>
                                                        <li>KEBIASAAN, penggunaan NAPZA sudah menjadi kebiasaan yang
                                                            mengikat dan mulai berpengaruh
                                                            pada kehidupan sosial seperti malas sekolah, malas bergaul.</li>
                                                        <li>KETERGANTUNGAN, keterikatan pada NAPZA sudah mendalam.</li>
                                                        <li>INTOKSIFITAS, keracunan karena penyalahgunaan NAPZA, mengalami
                                                            kerusakan pada organ tubuh
                                                            dan otak</li>
                                                        <li>MENINGGAL DUNIA</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#gkn" aria-expanded="false"
                                                    aria-controls="gkn">
                                                    Gejala Ketergantungan Napza
                                                </button>
                                            </h2>
                                            <div id="gkn" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="text-justify">
                                                        <li>Keinginan kuat (kompulsif) untuk pemakaian NAPZA berulang kali
                                                        </li>
                                                        <li>Kesulitan mengendalikan penggunaan NAPZA, baik dalam usaha
                                                            menghentikan maupun
                                                            mengurangi tingkat pemakaiannya</li>
                                                        <li>Terjadi gejala putus zat jika pemakaiannya dihentikan atau
                                                            jumlah pemakaiannya dikurangi</li>
                                                        <li>Toleransi; jumlah NAPZA yang diperlukan semakin besar, agar
                                                            diperoleh pengaruh yang sama
                                                            terhadap tubuh</li>
                                                        <li>Mengabaikan alternatif kesenangan lain dan meningkatnya waktu
                                                            yang digunakan untuk
                                                            memperoleh NAPZA</li>
                                                        <li>Terus memakai, meskipun disadari akibat yang merugikan</li>
                                                        <li>Menyangkal; tidak mengakui adanya masalah, padahal ditemukan
                                                            narkoba, alat pemakaian dan
                                                            gejala menggunakan NAPZA</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#cmpn" aria-expanded="false"
                                                    aria-controls="cmpn">
                                                    Cara Mencegah Penggunaan Narkoba
                                                </button>
                                            </h2>
                                            <div id="cmpn" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ol class="text-justify">
                                                        <li>Memilih lingkungan pergaulan yang baik</li>
                                                        <li>Mencari tau dampak bahaya penggunaan narkoba</li>
                                                        <li>Melakukan kegiatan yang positif</li>
                                                        <li>Memiliki pendirian yang teguh Menolak dengan tegas ajakan untuk
                                                            mengonsumsi narkoba</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!--end page main-->
@endsection
