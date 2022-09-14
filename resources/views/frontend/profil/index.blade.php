@extends('frontend.layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/chart.css') }}">
@endsection
@section('content')
    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-6 text-white">
                    <h1>About Us</h1>
                    <p>
                        Sekolah Dasar Negeri 21 Siantan merupakan sekolah negeri yang berlokasi di Jalan Darma Bhakti, Jungkat, Kec. Siantan, Kab. Mempawah Prov. Kalimantan Barat. Sekolah ini didirikan pada tanggal 13 Februari 1990, sekolah ini memiliki akreditasi B, dengan jumlah guru 11 orang, dan kurang lebih 218 orang siswa. Jumlah ruangan di sekolah ini yaitu 8 ruang kelas, ruang UKS (Usaha Kesehatan Sekolah), perpustakaan, lapangan olahraga, dan musholla.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('frontend/assets/img/kepala-sekolah.png')}}" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->
    <section class="container py-5">
        <div class="m-auto text-center">
            <h1 class="h1">SAMBUTAN KEPALA SEKOLAH</h1>
        </div>
        </div>
        <div class="container">
            <div class="row p-5">
                <div class="col-lg-12 mb-0 d-flex align-items-center">
                    <div class="text-align-left align-self-center text-justify">
                        <p>
                            Puji syukur kami panjatkan kehadirat ALLAH SWT atas limpahan rahmat dan karunia-Nya sehingga SDN 21 Siantan berhasil membangun website, Kehadiran Website SDN 21 Siantan diharapkan dapat memudahkan penyampaian informasi secara terbuka kepada warga sekolah, alumni dan masyarakat serta instansi lain yang terkait.

                            Semoga dengan kehadiran Website ini dapat memperoleh informasi dengan cepat sehingga dapat mengikuti perkembangan dalam pengetahuan yang berkembang dengan cepat pula. Kesiapan dari semua warga sekolah sangat besar artinya bagi keberadaan website tersebut, sebab tanpa kesiapan dari warga sekolah maka keberadaan website tersebut akan tidak ada gunanya.

                            Sehubungan dengan hal tersebut maka semua warga sekolah harus mau untuk belajar menggunakan komputer dan internet, agar dapat meng-akses segala informasi yang berhubungan dengan sekolah dan pengetahuan di internet.

                            Selamat bekerja,
                        </p>
                        <p>

                            Demikian dan terima kasih.

                            Wassalamu’alaikum Wr. Wb.
                            Kepala Sekolah SD Negeri 21 Siantan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="col-lg-6 m-auto text-center">
            <h1 class="h1">VISI DAN MISI</h1>
        </div>
        </div>
        <div class="container">
            <div class="row p-5">
                <div class="col-lg-12 mb-0 d-flex align-items-center">
                    <div class="text-align-left align-self-center">
                        <h3>Visi</h3>
                        <p>INOVATIF, EFISIEN DAN KOMPETITIF BERBASIS PADA SDM YANG TANGGUH</p>
                        <h3>Misi</h3>
                        <p>
                            <ul>
                                <li>MEWUJUDKAN SEKOLAH INOVATIF</li>
                                <li>MEWUJUDKAN MANAJEMEN BERBASIS SEKOLAH YANG TANGGUH</li>
                                <li>MEWUJUDKAN KEMAMPUAN OLAHRAGA YANG TANGGUH DAN KOMPETITIF</li>
                                <li>MEWUJUDKAN SEKOLAH SEHAT</li>
                                <li>MEWUJUDKAN KEPRAMUKAAN YANG MENJADI SURI TAULADAN</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="col-lg-6 m-auto text-center">
            <h1 class="h1">STRUKTUR ORGANISASI</h1>
        </div>
        </div>
        <div class="container text-center">
            <img class="img-responsive img-fluid" src="{{asset('img/struktur.jpeg')}}" alt="">
        </div>
    </section>
@endsection
