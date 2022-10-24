<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tele Addis</title>

    <meta name="description" content="teleAddis is one of the most popular blog template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="#" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="teleAddis - @yield('title')" />

    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="@yield('url')" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="@yield('title')" />
    <meta property="og:description"   content="@yield('detail')" />
    <meta property="og:image"         content="@yield('image')" />


    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- Gordita Fonts CSS -->
    <link rel="stylesheet" href="/assets/fonts/gordita-fonts.css" />

    <!-- Icofont CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/icofont.min.css" />

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/lightgallery.min.css">

    <!-- Swiper bundle CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/aos.css">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <!-- <link rel="stylesheet" href="/assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="/assets/css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

</head>




<body class="theme-color-four">




<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=1241046355944849&autoLogAppEvents=1" nonce="PUKJWDi2"></script>


@include('components.header')




<div id="main-wrapper">
    <div class="breadcrumb-area" style="background-image: url('/assets/images/hero/home-3-hero-bg.jpg');">
        <div class="container">
            <div class="row">
                <br>
                <br>


            </div>
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <!-- <h2 class="breadcrumb-title">@@title</h2> -->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-wrapper-reveal">
@include('layouts.flash_message')
        @yield('content')

    </div>
</div>








@include('components.footer')






<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top icofont-swoosh-up"></i>
    <i class="arrow-bottom icofont-swoosh-up"></i>
</a>
<!--====================  End of scroll top  ====================-->
@include('components.mobilemenu')






<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>

<!-- jQuery JS -->
<script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="/assets/js/vendor/bootstrap.min.js"></script>

<!-- Light gallery JS -->
<script src="/assets/js/plugins/lightgallery.min.js"></script>

<!-- Isotope JS -->
<script src="/assets/js/plugins/isotope.min.js"></script>

<!-- Masonry JS -->
<script src="/assets/js/plugins/masonry.min.js"></script>

<!-- ImagesLoaded JS -->
<script src="/assets/js/plugins/images-loaded.min.js"></script>

<!-- Swiper Bundle JS -->
<script src="/assets/js/plugins/swiper-bundle.min.js"></script>

<!-- AOS JS -->
<script src="/assets/js/plugins/aos.js"></script>

<!-- Ajax JS -->
<script src="/assets/js/plugins/ajax.mail.js"></script>

<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
<!-- <script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script> -->


<!-- Main JS -->
<script src="/assets/js/main.js"></script>


</body>

</html>
