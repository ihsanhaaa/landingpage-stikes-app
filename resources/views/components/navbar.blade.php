<!--vs-mobile-menu start-->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ url('/') }}"><img src="{{ asset('img/logo-stikes.png') }}" style="height: 70px" alt="Knirpse"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Aplikasi</a>
                    <ul class="sub-menu">
                        <li><a href="https://stikessambas.sevimaplatform.com/siakad/home">SIAKAD</a></li>
                        <li><a href="https://elearning.kampusstikessambas.ac.id/">E-Learning</a></li>
                        <li><a href="https://sistemas.kampusstikessambas.ac.id/">SISTEMAS</a></li>
                        <li><a href="https://lab.kampusstikessambas.ac.id/home">LAB</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#berita">Berita</a>
                </li>
                <li>
                    <a href="#galeri">Galeri</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">Tentang</a>
                </li>
            </ul>
        </div><!-- Menu Will Append With Javascript -->
    </div>
</div>
<!--vs-mobile-menu end-->

<!--======== Header ========-->
<header class="vs-header">
    <!--header-top-wrapper start-->
    <div class="header-top-area d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="header-notice">
                        <span class="date"><span class="day">20</span><span class="month">Feb
                                2025</span></span><span class="notice">Pendaftaran Mahasiswa Baru Gelombang 1</span>
                                <a href="https://stikessambas.sevimaplatform.com/spmbfront/home" target="_blank" style="color: white; margin-left: 20px;"><u>Daftar Sekarang</u></a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-social">
                        <ul>
                            <li><a href="https://www.facebook.com/stikes.sambas.7?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/stikes_sambas?igsh=MnMyd21seXh0OWY3" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header-top-wrapper end-->
    <!--vs-main-menu-wrapper start-->
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="header-menu-area">
                <div class="container">
                    <div class="row gx-20 align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('img/logo-stikes.png') }}" style="height: 70px" alt="Knirpse">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Beranda</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Aplikasi</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://stikessambas.sevimaplatform.com/siakad/home" target="_blank">SIAKAD</a></li>
                                            <li><a href="https://elearning.kampusstikessambas.ac.id/" target="_blank">E-Learning</a></li>
                                            <li><a href="https://sistemas.kampusstikessambas.ac.id/" target="_blank">SISTEMAS</a></li>
                                            <li><a href="https://lab.kampusstikessambas.ac.id/home" target="_blank">LAB</a></li>
                                            <li><a href="#">E-Library</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#berita">Berita</a>
                                    </li>
                                    <li>
                                        <a href="#galeri">Galeri</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">Tentang</a>
                                    </li>
                                </ul>
                            </nav>
                            <button type="button" class="vs-menu-toggle d-block d-lg-none"><i
                                    class="far fa-bars"></i> Menu</button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button d-xl-flex align-items-center">
                                {{-- <a href="" class="vs-btn wave-btn">Book a visit</a> --}}
                                <a href="{{ route('login') }}" class="icon-btn"><i class="far fa-user"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--vs-main-menu-wrapper end-->
</header>
<!--======== / Header ========-->