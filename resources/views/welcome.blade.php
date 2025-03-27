@extends('layouts.app')

@section('title')
    Beranda
@endsection

@section('content')
    @push('css-plugins')
    <style>
        .whatsapp-button {
            position: fixed;
            bottom: 10px;
            right: 30px;
            background-color: #25D366;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            text-decoration: none;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .whatsapp-button:hover {
            transform: scale(1.1);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.4);
        }

        <style>
            .insta-container {
                display: flex;
                justify-content: center;
            }
        </style>
    </style>
    
    @endpush

    @include('components.navbar')

    <!--======== Hero Section ========-->
    <section class="vs-hero-wrapper hero-3 position-relative">
        <div class="section-after style-2 d-none d-md-block">
            {{-- <img src="assets/img/shape/hero3-after.png" alt="shape"> --}}
        </div>
        <div class="hero-slider3 vs-carousel" data-slide-show="1" data-md-slide-show="1" data-arrows="true" data-fade="true">
            <!-- Single Slide -->
            <div class="vs-hero-inner">
                <div class="vs-hero-bg" data-bg-src="{{ asset('img/Brosur-PMB.jpg') }}"></div>

            </div>
            <!-- Single Slide -->
            <div class="vs-hero-inner">
                <div class="vs-hero-bg" data-bg-src="{{ asset('img/foto-wisuda.jpg') }}"></div>

            </div>
            <!-- Single Slide -->
            <div class="vs-hero-inner">
                <div class="vs-hero-bg" data-bg-src="{{ asset('img/foto-depan.jpg') }}"></div>

            </div>
        </div> <!-- / Slider end -->
    </section>
    <!--======== / Hero Section ========-->

    <!--======== Service Section ========-->
    <section class="service-section space">
        <div class="container">
            <div class="row text-center justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9">
                    <div class="title-area">
                        <span class="sub-title">Layanan</span>
                        <h1 class="sec-title">Aplikasi Akademik</h1>
                    </div>
                </div>
            </div>
            <div class="row gy-20">
                <!-- Single item -->
                <div class="col-lg-3 col-md-6 col-sm-6 service-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card-inner">
                        <div class="sr-icon">
                            <i class="fas fa-file-alt" style="font-size: 40px"></i>
                        </div>
                        <h2 class="sr-title h4"><a href="https://stikessambas.sevimaplatform.com/siakad/home" target="_blank">SIAKAD</a></h2>
                    </div>
                </div>
                <!-- Single item -->
                <div class="col-lg-3 col-md-6 col-sm-6 service-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card-inner">
                        <div class="sr-icon">
                            <i class="fas fa-chalkboard-teacher" style="font-size: 40px"></i>
                        </div>
                        <h2 class="sr-title h4"><a href="https://elearning.kampusstikessambas.ac.id/" target="_blank">E-Learning</a></h2>
                    </div>
                </div>
                <!-- Single item -->
                <div class="col-lg-3 col-md-6 col-sm-6 service-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card-inner">
                        <div class="sr-icon">
                            <i class="fas fa-database" style="font-size: 40px"></i>
                        </div>
                        <h2 class="sr-title h4"><a href="https://sistemas.kampusstikessambas.ac.id/" target="_blank">SISTEMAS</a></h2>
                    </div>
                </div>
                <!-- Single item -->
                <div class="col-lg-3 col-md-6 col-sm-6 service-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card-inner">
                        <div class="sr-icon">
                            <i class="fas fa-vials" style="font-size: 40px"></i>
                        </div>
                        <h2 class="sr-title h4"><a href="https://lab.kampusstikessambas.ac.id/home" target="_blank">LAB</a></h2>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="shape-mockup z-index-3 d-none d-xl-block" data-top="-4%" data-left="4%"><img
                src="assets/img/shape/service-line.png" alt="shapes"></div>
        <div class="shape-mockup shapePulse z-index-negative d-none d-xl-block" data-top="27%" data-left="9%"><img
                src="assets/img/icon/lolypop.png" alt="shapes"></div>
        <div class="shape-mockup shapePulse rotate z-index-negative" data-top="19%" data-right="21%"><img
                src="assets/img/icon/star-sm.png" alt="shapes"></div>
        <div class="shape-mockup shapePulse rotate z-index-negative" data-bottom="20%" data-right="10%"><img
                src="assets/img/icon/star.png" alt="shapes"></div> --}}
    </section>
    <!--======== / Service Section ========-->

    <!--======== About Section ========-->
    <section class="about-section bg-smoke space">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row align-items-center gy-30">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center text-lg-start">
                        <span class="sub-title">Tentang</span>
                        <h1 class="sec-title big-title">STIKES SAMBAS</h1>
                        <p class="fs-md mb-30">Sekolah Tinggi Ilmu Kesehatan (STIKES) Sambas adalah institusi pendidikan
                            tinggi yang berfokus pada bidang kesehatan, berlokasi di Sambas, Kalimantan Barat. Didirikan
                            pada tahun 2018 berdasarkan SK KEMENRISTEKDIKTI Nomor 1211/KPT/I/2018, STIKES Sambas berkomitmen
                            untuk menyediakan pendidikan berkualitas tinggi bagi calon tenaga kesehatan di Indonesia.</p>
                        <a href="{{ route('about') }}" class="vs-btn wave-btn style-1">Baca Selengkapnya...</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="shape-slider-area">
                        <button data-slick-prev="#sliderOne" class="simple-arrow arrow-left"><i
                                class="far fa-chevron-left"></i></button>
                        <button data-slick-next="#sliderOne" class="simple-arrow arrow-right"><i
                                class="far fa-chevron-right"></i></button>
                        <div class="shape-slider vs-carousel" id="sliderOne" data-slide-show="1" data-md-slide-show="1">
                            <div class="slide-item">
                                <img src="{{ asset('img/foto-senat.jpg') }}" alt="shape">
                            </div>
                            <div class="slide-item">
                                <img src="{{ asset('img/foto-praktikum.jpg') }}" alt="shape">
                            </div>
                            <div class="slide-item">
                                <img src="{{ asset('img/foto-wisuda.jpg') }}" alt="shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="shape-mockup shapePulse d-none d-lg-block rotate" data-bottom="22%" data-right="5%"><img
                src="assets/img/icon/star.png" alt="shapes"></div>
        <div class="shape-mockup shapePulse d-none d-hd-block" data-top="17%" data-left="6%"><img
                src="assets/img/icon/cap-plane.png" alt="shapes"></div>
        <div class="shape-mockup rotate d-none d-sm-block z-index-2" data-bottom="-7%" data-left="6%"><img
                src="assets/img/icon/busket-ball.png" alt="shapes"></div> --}}
    </section>
    <!--======== / About Section ========-->

    <!--======== Team Section ========-->
    <section class="team-section space-extra">
        {{-- <div class="shape-before"><img src="assets/img/shape/before-shape-8.png" alt="shape"></div> --}}
        <div class="container">
            <div class="row" data-slide-show="3" data-arrows="true">
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-box">
                        <div class="team-img">
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DHFURJjS4_q/" data-instgrm-version="14"></blockquote>
                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-box">
                        <div class="team-img">
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DHU1c2-S9EH/" data-instgrm-version="14"></blockquote>
                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-box">
                        <div class="team-img">
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DGIaRsCyPUM/" data-instgrm-version="14"></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script async src="//www.instagram.com/embed.js"></script>
    </section>
    <!--======== / Team Section ========-->


    <!--======== Counter Section ========-->
    <section class="counter-section space-double" data-bg-src="{{ asset('img/foto-wisuda.jpg') }}" data-overlay="title"
        data-opacity="8">

        <div class="container text-center">
            <div class="row justify-content-center">
                <!-- Single Item -->
                <div class="col-xl-auto col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="counter-box">
                        <div class="counter-info">
                            <p class="counter-text" style="font-size: 20px;">Pembukaan Pendaftaran Mahasiswa Baru Tahun
                                Akademik 2025/2026 Program Studi S-1 FARMASI Gelombang 2</p>

                            <h1 class="sec-title big-title" style="color: white; margin-top: 10px;">Mari Bergabung Bersama Kami</h1>

                            <a href="https://stikessambas.sevimaplatform.com/spmbfront/home" target="_blank" class="vs-btn wave-btn">Daftar Sekarang</a>
                            <a href="{{ asset('img/Brosur-PMB.jpg') }}" download="Brosur-PMB.jpg" class="vs-btn wave-btn"><i class="fas fa-arrow-circle-down"></i> Download Brosur</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="section-before style-2"><img src="assets/img/shape/counter-before-smoke-2.png" alt="shape"></div>
<div class="section-after style-2"><img src="assets/img/shape/counter-after-smoke.png" alt="shape"></div> --}}

    </section>
    <!--======== / Counter Section ========-->

    <!--======== Why Section ========-->
    <section class="why-section bg-smoke space-shape-plus">
        <div class="container">
            <div class="row gx-70 gy-30 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="row why-images">
                        <div class="col-6">
                            <div class="short-img mb-30">
                                <a href="{{ asset('img/logo-kerjasama.jpg') }}" class="popup-image"><img
                                        src="{{ asset('img/logo-kerjasama.jpg') }}" alt="photo"></a>
                            </div>
                            <div class="short-img mb-30">
                                <a href="{{ asset('img/foto-kelas.jpg') }}" class="popup-image"><img
                                        src="{{ asset('img/foto-kelas.jpg') }}" alt="photo"></a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="short-img mb-30">
                                <a href="{{ asset('img/logo-mahasiswa.jpg') }}" class="popup-image"><img
                                        src="{{ asset('img/logo-mahasiswa.jpg') }}" alt="photo"></a>
                            </div>
                            <div class="short-img mb-30">
                                <a href="{{ asset('img/logo-lemkes.png') }}" class="popup-image"><img
                                        src="{{ asset('img/logo-lemkes.png') }}" alt="photo"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-start wow fadeInRight" data-wow-delay="0.1s">
                    <div class="title-area">
                        <span class="sub-title">Fasilitas Kuliah Di</span>
                        <h1 class="sec-title big-title">STIKES SAMBAS</h1>
                    </div>
                    
                    <p>Kerjasama Profesi Apoteker UNTAN.</p>
                    <p>Gratis Asrama (1 Tahun).</p>
                    <p>Akreditasi Kampus Baik.</p>
                    <p>Ruang Kelas AC.</p>
                </div>
            </div>
        </div>

    </section>
    <!--======== / Why Section ========-->

    <!--======== Classes Section ========-->
    <section class="classes-section space">
        <div class="container">
            <div class="row text-center justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9">
                    <div class="title-area">
                        <span class="sub-title" id="berita">Postingan</span>
                        <h1 class="sec-title">Berita dan Artikel</h1>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-arrows="true">

                <!-- Single Class -->
                {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="class-card">
                        <div class="class-img">
                            <a href="class-details.html"><img src="assets/img/class/class-1.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h2 class="class-title h4"><a href="class-details.html">Language Class</a></h2>
                            <p class="class-text">Interactively brand client center through is customized value good ideas.
                            </p>

                            <a href="class-details.html" class="vs-btn style-1">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div> --}}

            </div>
            <p class="text-center">Belum ada berita</p>
        </div>
    </section>
    <!--======== / Classes Section ========-->

    <!--======== Team Section ========-->
    <section class="team-section space-extra">
        <div class="shape-before"><img src="assets/img/shape/before-shape-8.png" alt="shape"></div>
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.1s">
                <span class="sub-title" id="galeri">Galeri</span>
                <h1 class="sec-title">Kegiatan</h1>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-arrows="true">
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-box">
                        <div class="team-img">
                            <img src="{{ asset('img/foto-familly-gathering.jpg') }}" alt="team">
                        </div>
                        <div class="team-info">
                            <h4 class="team-title"><a href="#">Family Gathering</a></h4>
                            <span class="team-desig">20 Desember 2024</span>
                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-box">
                        <div class="team-img">
                            <img src="{{ asset('img/foto-wisuda.jpg') }}" alt="team">
                        </div>
                        <div class="team-info">
                            <h4 class="team-title"><a href="#">Wisuda Angkatan 2</a></h4>
                            <span class="team-desig">15 Oktober 2024</span>
                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-box">
                        <div class="team-img">
                            <img src="{{ asset('img/foto-asrama.jpg') }}" alt="team">
                        </div>
                        <div class="team-info">
                            <h4 class="team-title"><a href="#">Kegiatan Asrama </a></h4>
                            <span class="team-desig">5 Desember 2024</span>
                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-box">
                        <div class="team-img">
                            <img src="{{ asset('img/foto-sosialisasi.jpg') }}" alt="team">
                        </div>
                        <div class="team-info">
                            <h4 class="team-title"><a href="#">Sosialisasi PMB</a></h4>
                            <span class="team-desig">29 November 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== / Team Section ========-->

    <a href="https://wa.me/6289602461010?text=Halo,%20saya%20berminat%20untuk%20mendaftar%20di%20STIKes%20Sambas" class="whatsapp-button" target="_blank" title="Kontak">
        &#x1F4AC;
    </a>

    <!-- Scroll To Top -->
    {{-- <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a> --}}

    @include('components.footer')

    @push('javascript-plugins')
    @endpush
@endsection
