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

                                    <p class="card-text text-justify" style="text-indent: 0.5in">Sebagian besar masyarakat
                                        mungkin belum memahami istilah yang disebut stunting.
                                        Stunting adalah masalah kurang gizi kronis yang disebabkan oleh kurangnya asupan
                                        gizi dalam waktu
                                        yang cukup lama, sehingga mengakibatkan gangguan pertumbuhan pada anak yakni tinggi
                                        badan
                                        anak lebih rendah atau pendek (kerdil) dari standar usianya. Kondisi tubuh anak yang
                                        pendek
                                        seringkali dikatakan sebagai faktor keturunan (genetik) dari kedua orang tuanya,
                                        sehingga
                                        masyarakat banyak yang hanya menerima tanpa berbuat apa-apa untuk mencegahnya.
                                        Padahal
                                        seperti kita ketahui, genetika merupakan faktor determinan kesehatan yang paling
                                        kecil
                                        pengaruhnya bila dibandingkan dengan faktor perilaku, lingkungan (sosial, ekonomi,
                                        budaya, politik),
                                        dan pelayanan kesehatan.
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
                                    <h4 class="card-title text-muted">Ciri {{ $section }} Pada Anak</h4>

                                    <ul class="text-justify">
                                        <li>pertumbuhan melambat</li>
                                        <li>wajah tampak lebih muda dari anak seusianya</li>
                                        <li>pertumbuhan gigi terlambat</li>
                                        <li>performa buruk pada kemampuan fokus dan memori belajarnya</li>
                                        <li>usia 8 - 10 tahun anak menjadi lebih pendiam, tidak banyak melakukan kontak mata
                                            terhadap orang di sekitarnya</li>
                                        <li>berat badan balita tidak naik bahkan cenderung menurun.</li>
                                        <li>perkembangan tubuh anak terhambat, seperti telat menarche (menstruasi pertama
                                            anak perempuan).</li>
                                        <li>anak mudah terserang berbagai penyakit infeksi.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- timeline item 1 event content -->
                        <div class="col py-2">
                            <div class="card radius-15 p-2">
                                <div class="card-body">
                                    <h4 class="card-title text-muted">Dampak Jangka Panjang Stunting yang perlu di <label
                                            class="text-danger">Waspadai</label>
                                    </h4>
                                    <ol>
                                        <li>Gangguan Kognitif</li>
                                        <li>Kesulitan Belajar</li>
                                        <li>Rentan Mengalami Penyakit Tidak Menular</li>
                                        <li>Kekebalan Tubuh Lebih Rendah</li>
                                        <li>Performa Rendah</li>
                                    </ol>

                                    <ol>
                                        <li>Pola Makan
                                            <p class="card-text text-justify" style="text-indent: 0.5in">Masalah stunting
                                                dipengaruhi oleh rendahnya akses terhadap makanan dari segi jumlah dan
                                                kualitas gizi, serta seringkali tidak beragam. Istilah “Isi Piringku” dengan
                                                gizi seimbang perlu
                                                diperkenalkan dan dibiasakan dalam kehidupan sehari-hari. Bagi anak-anak
                                                dalam masa
                                                pertumbuhan, memperbanyak sumber protein sangat dianjurkan, di samping tetap
                                                membiasakan
                                                mengonsumsi buah dan sayur.
                                            </p>
                                            <p class="card-text text-justify" style="text-indent: 0.5in">
                                                Dalam satu porsi makan, setengah piring diisi oleh sayur dan buah,
                                                setengahnya lagi diisi
                                                dengan sumber protein (baik nabati maupun hewani) dengan proporsi lebih
                                                banyak daripada
                                                karbohidrat.
                                            </p>
                                        </li>

                                        <li>Pola Asuh
                                            <p class="card-text text-justify" style="text-indent: 0.5in">Stunting juga
                                                dipengaruhi aspek perilaku, terutama pada pola asuh yang kurang baik dalam
                                                praktek pemberian makan bagi bayi dan Balita. Dimulai dari edukasi tentang
                                                kesehatab reproduksi
                                                dan gizi bagi remaja sebagai cikal bakal keluarga, hingga para calon ibu
                                                memahami pentingnya
                                                memenuhi kebutuhan gizi saat hamil dan stimulasi bagi janin, serta
                                                memeriksakan kandungan empat
                                                kali selama kehamilan. Bersalin di fasilitas kesehatan, lakukan inisiasi
                                                menyusu dini (IMD) dan
                                                berupayalah agar bayi mendapat colostrum air susu ibu (ASI). Berikan hanya
                                                ASI saja sampai bayi
                                                berusia 6 bulan. Setelah itu, ASI boleh dilanjutkan sampai usia 2 tahun,
                                                namun berikan juga makanan
                                                pendamping ASI. Jangan lupa pantau tumbuh kembangnya dengan membawa buah
                                                hati ke
                                                Posyandu setiap bulan.
                                            </p>
                                            <p class="card-text text-justify" style="text-indent: 0.5in">
                                                Hal lain yang juga perlu diperhatikan adalah berikanlah hak anak mendapatkan
                                                kekebalan dari
                                                penyakit berbahaya melalui imunisasi yang telah dijamin ketersediaan dan
                                                keamanannya oleh
                                                pemerintah. Masyarakat bisa memanfaatkannya dengan tanpa biaya di Posyandu
                                                atau Puskesmas.
                                            </p>
                                        </li>

                                        <li>Sanitasi dan Akses Air Bersih
                                            <p class="card-text text-justify" style="text-indent: 0.5in">Rendahnya akses
                                                terhadap pelayanan kesehatan, termasuk di dalamnya adalah akses
                                                sanitasi dan air bersih, mendekatkan anak pada risiko ancaman penyakit
                                                infeksi. Untuk itu, perlu
                                                membiasakan cuci tangan pakai sabun dan air mengalir, serta tidak buang air
                                                besar sembarangan.
                                            </p>
                                            <p class="card-text text-justify" style="text-indent: 0.5in">
                                                “Pola asuh dan status gizi sangat dipengaruhi oleh pemahaman orang tua
                                                (seorang ibu)
                                                maka, dalam mengatur kesehatan dan gizi di keluarganya. Karena itu, edukasi
                                                diperlukan agar dapat
                                                mengubah perilaku yang bisa mengarahkan pada peningkatan kesehatan gizi atau
                                                ibu dan anaknya”,
                                                tutupnya.
                                            </p>
                                        </li>
                                    </ol>
                                    Sumber : <a target="blank"
                                        href="http://p2ptm.kemkes.go.id/kegiatan-p2ptm/subdit-penyakit-diabetes-melitus-dangangguan-metabolik/cegah-stunting-dengan-perbaikan-pola-makan-pola-asuh-dan-sanitasi">http://p2ptm.kemkes.go.id/kegiatan-p2ptm/subdit-penyakit-diabetes-melitus-dangangguan-metabolik/cegah-stunting-dengan-perbaikan-pola-makan-pola-asuh-dan-sanitasi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!--end page main-->
@endsection
