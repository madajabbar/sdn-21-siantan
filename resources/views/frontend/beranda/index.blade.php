@extends('frontend.layouts.app')

@section('content')
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-12 col-lg-12 order-lg-last">
                            <img class="img-fluid" src="{{asset('img/gambar (1).jpeg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{asset('img/gambar (2).jpeg')}}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <p>
                                    INOVATIF, EFISIEN DAN KOMPETITIF BERBASIS PADA SDM YANG TANGGUH
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{asset('img/gambar (3).jpeg')}}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <ul>
                                    <li>MEWUJUDKAN SEKOLAH INOVATIF</li>
                                    <li>MEWUJUDKAN MANAJEMEN BERBASIS SEKOLAH YANG TANGGUH</li>
                                    <li>MEWUJUDKAN KEMAMPUAN OLAHRAGA YANG TANGGUH DAN KOMPETITIF</li>
                                    <li>MEWUJUDKAN SEKOLAH SEHAT</li>
                                    <li>MEWUJUDKAN KEPRAMUKAAN YANG MENJADI SURI TAULADAN</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">SAMBUTAN KEPALA SEKOLAH</h1>
            </div>
        </div>
        <div class="container">
            <div class="row p-5">
                <div class="col-lg-6 mb-0 d-flex align-items-center">
                    <div class="text-justify align-self-center">
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
                <div class="mx-auto col-md-8 col-lg-6 order-lg-first">
                    <img class="img-fluid" src="https://picsum.photos/400/600" width="400" height="600" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">FASILITAS SEKOLAH</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-home"></i></div>
                    <h2 class="h5 mt-4 text-center">MUSHOLA</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-book"></i></div>
                    <h2 class="h5 mt-4 text-center">PERPUSTAKAAN</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-university"></i></div>
                    <h2 class="h5 mt-4 text-center">KELAS</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-hospital"></i></div>
                    <h2 class="h5 mt-4 text-center">UKS</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-object-group"></i></div>
                    <h2 class="h5 mt-4 text-center">Lapangan</h2>
                </div>
            </div>

        </div>
    </section>
@endsection
