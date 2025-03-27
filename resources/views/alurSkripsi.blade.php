@extends('layouts.app')

@section('title')
    Alur Skripsi
@endsection

@section('content')
    @push('css-plugins')
    @endpush

    @include('components.navbar')

    <!--======== About Section ========-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/foto-wisuda.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Alur Skripsi</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="active">Alur Skripsi</li>
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
                        <img src="{{ asset('img/ALUR SKRIPSI.jpg') }}" style="border-radius: 10px;" alt="">
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
