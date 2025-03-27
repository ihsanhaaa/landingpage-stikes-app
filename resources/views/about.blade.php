@extends('layouts.app')

@section('title')
    Tentang
@endsection

@section('content')
    @push('css-plugins')
    @endpush

    @include('components.navbar')

    <!--======== About Section ========-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/foto-wisuda.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tentang Kami</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="active">Tentang Kami</li>
                </ul>
            </div>
        </div>
    </div>
    <!--======== / About Section ========-->

    <!--======== Contact Us Section ========-->
    <section class="contact-section space-page">
        <div class="container">
            <div class="row gx-50 gy-30">
                <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="contact-form-box">
                        <video controls width="100%" class="rounded">
                            <source src="{{ asset('videos/video-profil-stikes.mp4') }}" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>

                        <h2 class="contact-title mt-3">Tentang STIKES SAMBAS</h2>
                        
                        <p>
                            Sekolah Tinggi Ilmu Kesehatan (STIKES) Sambas adalah institusi pendidikan tinggi yang berfokus pada bidang kesehatan, berlokasi di Sambas, Kalimantan Barat. Didirikan pada tahun 2018 berdasarkan SK KEMENRISTEKDIKTI Nomor 1211/KPT/I/2018, STIKES Sambas berkomitmen untuk menyediakan pendidikan berkualitas tinggi bagi calon tenaga kesehatan di Indonesia. 
                            <br><br>

                            Saat ini, STIKES Sambas memiliki satu program studi, yaitu Program Studi S1 Farmasi. Program ini dirancang untuk menghasilkan lulusan yang kompeten dalam berbagai bidang kefarmasian, termasuk pelayanan farmasi klinik dan komunitas, pengelolaan sediaan farmasi, distribusi perbekalan farmasi, produksi sediaan farmasi, dan pengawasan peredaran sediaan farmasi. 
                            <br><br>

                            STIKES Sambas memiliki tenaga pengajar berkualitas dan berpengalaman, serta fasilitas lengkap seperti laboratorium, perpustakaan, dan ruang kuliah yang nyaman. Selain kegiatan akademik, kampus ini juga mendorong pengembangan karakter dan keterampilan sosial mahasiswa melalui berbagai kegiatan ekstrakurikuler, seminar, lokakarya, dan program pengabdian masyarakat. 
                            <br><br>

                            Pada Maret 2022, Program Studi S1 Farmasi STIKES Sambas menjalani visitasi akreditasi oleh tim asesor Lembaga Akreditasi Mandiri Pendidikan Tinggi Kesehatan (LAM-PT Kes) Indonesia, yang merupakan langkah penting dalam upaya peningkatan mutu pendidikan. 
                            <br><br>

                            Lulusan Program Studi S1 Farmasi STIKES Sambas dipersiapkan untuk berperan dalam berbagai profesi, seperti pelaksana pelayanan farmasi klinik dan komunitas, pengelola sediaan farmasi, distributor perbekalan farmasi, pelaksana produksi sediaan farmasi, dan pengawas peredaran sediaan farmasi.
                        </p>
                    </div>
                </div>

                <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="contact-form-box">
                        <h2 class="contact-title">Kontak Kami</h2>
                        <div class="info-media">
                            <div class="media-icon">
                                <img src="{{ asset('assets/img/icon/location.png') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="info-title">Alamat:</h4>
                                <p class="info-text">Dalam Kaum, Kec. Sambas, Kabupaten Sambas, Kalimantan Barat 79462.</p>
                            </div>
                        </div>
                        <div class="info-media">
                            <div class="media-icon">
                                <img src="{{ asset('assets/img/icon/phone.png') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="info-title">No Telepon:</h4>
                                <p class="info-text">
                                    <a href="https://wa.me/6285252215103" target="_blank" rel="noopener noreferrer">0852-5221-5103</a> (atau) 
                                    <a href="https://wa.me/6289602461010" target="_blank" rel="noopener noreferrer">089602461010</a>
                                </p>
                            </div>                            
                        </div>
                        <div class="info-media">
                            <div class="media-icon">
                                <img src="{{ asset('assets/img/icon/email.png') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="info-title">Email:</h4>
                                <p class="info-text"><a href="mailto:kampus.stikes@gmail.com">kampus.stikes@gmail.com</a> </p>
                            </div>
                        </div>
                        <div class="contact-location">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6927469566835!2d109.32987137496586!3d1.361000198626126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e4bbfd2b0eed0d%3A0xb23b196f2b6e53f0!2sSekolah%20Tinggi%20Ilmu%20Kesehatan%20Sambas!5e0!3m2!1sid!2sid!4v1736754275612!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== / Contact Us Section ========-->


    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    @include('components.footer')

    @push('javascript-plugins')
    @endpush
@endsection
