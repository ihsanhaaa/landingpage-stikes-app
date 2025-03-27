@extends('layouts.app')

@section('title')
    Pengajuan Seminar Hasil
@endsection

@section('content')
    @push('css-plugins')
    @endpush

    @include('components.navbar')

    <!--======== About Section ========-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/foto-wisuda.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Pengajuan Seminar Hasil</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="active">Pengajuan Seminar Hasil</li>
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
                    <div class="contact-form-box text-center">
                        <div class="mb-3">
                            <a href="{{ asset('word/FORM PENGAJUAN SEMINAR HASIL TERBARU.doc') }}" class="text-decoration-none">
                                <i class="fas fa-file-word fa-2x text-primary"></i>
                                <span class="fw-bold" style="font-size: 1.5rem;"> File Pengajuan Seminar Hasil</span>
                            </a>
                        </div>
                        <div>
                            <a href="https://forms.gle/GNeRJ1Fgv1HdxgL48" target="_blank" class="text-decoration-none">
                                <i class="fas fa-link fa-2x text-primary"></i>
                                <span class="fw-bold" style="font-size: 1.5rem;"> Google Form Pengajuan Seminar Hasil</span>
                            </a>
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
