<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="STIKES SAMBAS" content="Index page">

    <title>@yield('title')</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('img/logo-stikes.ico') }}" type="image/x-icon" />

    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('css-plugins')

</head>

<body>

    <!--========== Preloader =========-->
    {{-- <div class="preloader">
        <button class="vs-btn wave-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <svg id="preloader" xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128">
                <path id="Path_1" data-name="Path 1"
                    d="M64,0,40.08,21.9a10.98,10.98,0,0,0-5.05,8.75C34.37,44.85,64,60.63,64,60.63Z" fill="#ffb118" />
                <path id="Path_2" data-name="Path 2"
                    d="M128,64,106.12,40.1a10.97,10.97,0,0,0-8.75-5.05C83.17,34.4,67.4,64,67.4,64Z" fill="#80c141" />
                <path id="Path_3" data-name="Path 3"
                    d="M63.7,69.73a110.97,110.97,0,0,1-5.04-20.54c-1.16-8.7.68-14.17.68-14.17H97.37s-4.3-.86-14.47,10.1C79.84,48.42,63.7,69.7,63.7,69.7Z"
                    fill="#cadc28" />
                <path id="Path_4" data-name="Path 4"
                    d="M64,128l23.9-21.88a10.97,10.97,0,0,0,5.05-8.75C93.6,83.17,64,67.4,64,67.4Z" fill="#cf171f" />
                <path id="Path_5" data-name="Path 5"
                    d="M58.27,63.7a110.97,110.97,0,0,1,20.54-5.04c8.7-1.16,14.17.68,14.17.68V97.37s.86-4.3-10.1-14.47C79.58,79.84,58.3,63.7,58.3,63.7Z"
                    fill="#ec1b21" />
                <path id="Path_6" data-name="Path 6"
                    d="M0,64,21.88,87.9a10.97,10.97,0,0,0,8.75,5.05C44.83,93.6,60.6,64,60.6,64Z" fill="#018ed5" />
                <path id="Path_7" data-name="Path 7"
                    d="M64.3,58.27a110.97,110.97,0,0,1,5.04,20.54c1.16,8.7-.68,14.17-.68,14.17H30.63s4.3.86,14.47-10.1c3.06-3.3,19.2-24.58,19.2-24.58Z"
                    fill="#00bbf2" />
                <path id="Path_8" data-name="Path 8"
                    d="M69.73,64.34a111.023,111.023,0,0,1-20.55,5.05c-8.7,1.14-14.15-.7-14.15-.7V30.65s-.86,4.3,10.1,14.5c3.3,3.05,24.6,19.2,24.6,19.2Z"
                    fill="#f8f400" />
                <circle id="Ellipse_1" data-name="Ellipse 1" cx="2.03" cy="2.03" r="2.03"
                    transform="translate(61.97 61.97)" />
            </svg>
        </div>
    </div>

    <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose border-theme text-theme"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div> --}}

    @yield('content')

    <!-- Jquery -->
    <script src="{{ asset('assets/js/jquery-3.5.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Counter up  -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Parallax  -->
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <!-- Custom Carousel -->
    <script src="{{ asset('assets/js/vscustom-carousel.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- WOW JS (Animation JS) -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Form Js -->
    <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('javascript-plugins')

</body>

</html>
