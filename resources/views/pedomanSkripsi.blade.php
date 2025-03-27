@extends('layouts.app')

@section('title')
    Pedoman Penulisan Skripsi
@endsection

@section('content')
    @push('css-plugins')
    @endpush

    @include('components.navbar')

    <!--======== About Section ========-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/foto-wisuda.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Pedoman Penulisan Skripsi</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="active">Pedoman Penulisan Skripsi</li>
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
                        <iframe src="{{ asset('pdf/PEDOMAN PENULISAN SKRIPSI S1 FARMASI TERBARU FINAL (2).pdf') }}" width="100%" height="600px"></iframe>
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
