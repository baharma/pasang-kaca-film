<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasang Kaca Stiker</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('image/Logo Pasangkacafilm.webp') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('image/Logo Pasangkacafilm.webp') }}" type="image/x-icon">
    <!--- End favicon-->

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">
    <!-- End google font  -->
    {{-- seo --}}

    <meta name="description"
        content="Pasang kaca sticker berkualitas untuk rumah, kantor, dan mobil. Jasa pemasangan kaca film terpercaya dengan harga terbaik. Dapatkan penawaran spesial hari ini!">

    {{-- end Seo --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/splitting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">

    <!-- Code Editor  -->

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="light">

    <div class="sofax-preloader-wrap">
        <div class="sofax-preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- progress bar -->

    <div class="progress-bar-container">
        <div class="progress-bar"></div>
    </div>

    <!-- progress circle -->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
            <div class="top-arrow">
                <img src="{{ asset('assets/images/arrowtop.png') }}" alt="">
            </div>
        </div>
    </div>
    <!-- End All Js -->

    {{ $slot }}

    <!-- scripts -->
    <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/menu/menu.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/skill-bar.js') }}"></script>
    <script src="{{ asset('assets/js/pricing-switcher.js') }}"></script>
    <script src="{{ asset('assets/js/top-to-bottom.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-animation.js') }}"></script>


    <!-- <script src="assets/js/scrollsmooth.js"></script> -->
    <script src="{{ asset('assets/js/accordion.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>


    @stack('script')
</body>

</html>
