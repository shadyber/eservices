<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tele Addis</title>

    <meta name="description" content="teleAddis is one of the best blog created on cyber technology ">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="#" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="teleAddis - Updated Information and news about cyber technology" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
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
    <meta name="theme-color" content="#ffffff">  <!-- CSS
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
    <div class="site-wrapper-reveal">

        <!-- Hero Area Start -->
        <div class="hero-area-four">
            <div class="swiper-container hero-slider-four-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 m-auto">
                                    <div class="hero-area-four-post text-center" data-aos="fade-up">

                                        <div class="hero-area-four-post-meta mb-20">
                                                <span class="hero-area-four-post-author">
                                                By <a href="#">Super Admin</a>
                                            </span>
                                            <span class="hero-area-four-post-date">
                                                <a href="#">03 April, 2021</a>
                                            </span>
                                            <span class="time">10 min read</span>
                                        </div>

                                        <h1 class="title"><a href="/blog">
                                                We Care About Your Phone  </a>

                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="slider-four-slider-navigation">
                <div class="slider-four-button-next navigation-button"><i class="icofont-long-arrow-left"></i></div>
                <div class="slider-four-button-prev navigation-button"><i class="icofont-long-arrow-right"></i></div>
            </div>

        </div>
        <!-- Hero Area End -->

        <div class="hero-four-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-10 m-auto">
                        <div class="hero-four-inner-image" data-aos="fade-up">
                            <img src="/assets/images/hero/home-4-hero-image-01.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mostpopular-category-area section-space--pt_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-four-category">
                            <div class="category-step-1" data-aos="fade-up">
                                @foreach(\App\Models\BlogCategory::all() as $category)
                                    <a href="/category/{{$category->slug}}" class="btn-primary-four btn-large">{{__($category->title)}} </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Article Area Start -->
        <div class="recent-article-area section-space--pb_120">
            <div class="container">
                @php $i=0; @endphp

                <div class="row row--30">
                    @foreach(\App\Models\Blog::lastN(2) as $blog)
                        <div class="@if(($i++%2)==0) col-lg-8 @else col-lg-4 @endif">
                            <!-- Single Most Populer Item Start -->
                            <div class="single-most-populer-item" data-aos="fade-up">
                                <a href="#!" class="most-populer-thum">
                                    <img src="{{$blog->thumb}}" alt="{{$blog->title}}" />
                                </a>
                                <div class="most-populer-content">
                                    <div class="most-populer-post-author">
                                        By <a href="#">{{$blog->user->name}}</a>
                                    </div>
                                    <h3 class="title"><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a>
                                    </h3>
                                    <p class="dec mt-2">{{substr(strip_tags($blog->detail),0,150)}}</p>
                                    <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">{{$blog->created_at->diffForHumans()}}</a>
                                    </span>
                                        <span>{{$blog->visit}} {{__('read')}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Most Populer Item End -->
                        </div>

                    @endforeach

                </div>

                <div class="row row--30">
                    @foreach(\App\Models\Blog::popularN(2) as $blog)



                        <div class="@if(($i++%2)==0) col-lg-8 @else col-lg-4 @endif">
                            <!-- Single Most Populer Item Start -->
                            <div class="single-most-populer-item" data-aos="fade-up">
                                <a href="#!" class="most-populer-thum">
                                    <img src="{{$blog->thumb}}" alt="{{$blog->title}}" />
                                </a>
                                <div class="most-populer-content">
                                    <div class="most-populer-post-author">
                                        By <a href="#">{{$blog->user->name}}</a>
                                    </div>
                                    <h3 class="title"><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a>
                                    </h3>
                                    <p class="dec mt-2">{{substr(strip_tags($blog->detail),0,150)}}</p>
                                    <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">{{$blog->created_at->diffForHumans()}}</a>
                                    </span>
                                        <span>{{$blog->visit}} read</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Most Populer Item End -->
                        </div>

                    @endforeach

                </div>



                <div class="row row--30">
                    @foreach(\App\Models\Blog::trandinN(2) as $blog)



                        <div class="@if(($i++%2)!=0) col-lg-8 @else col-lg-4 @endif">
                            <!-- Single Most Populer Item Start -->
                            <div class="single-most-populer-item" data-aos="fade-up">
                                <a href="#!" class="most-populer-thum">
                                    <img src="{{$blog->thumb}}" alt="{{$blog->title}}" />
                                </a>
                                <div class="most-populer-content">
                                    <div class="most-populer-post-author">
                                        By <a href="#">{{$blog->user->name}}</a>
                                    </div>
                                    <h3 class="title"><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a>
                                    </h3>
                                    <p class="dec mt-2">{{substr(strip_tags($blog->detail),0,150)}}</p>
                                    <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">{{$blog->created_at->diffForHumans()}}</a>
                                    </span>
                                        <span>{{$blog->visit}} read</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Most Populer Item End -->
                        </div>

                    @endforeach

                </div>


                <div class="button-box mt-5 text-center" data-aos="fade-up">
                    <a href="/blog" class="btn-primary btn-large btn-bg-4">{{__('Show More')}} <i class="icofont-long-arrow-right"></i></a>
                </div>

                <div class="fb-like" data-href="https://teleaddis.com"
                     data-width="10"
                     data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>


            </div>
        </div>
        <!-- Recent Article Area End -->

        <!-- Testimonial Area Start -->
        <div class="testimonial-area bg-gray section-space--ptb_120" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-10" data-aos="fade-up">
                            <h6 class="sub-title-four mb-20">Some Testimonial</h6>
                            <h2 class="title">What People Say About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider-area">
                    <div class="swiper-container testimonial-slider-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-testimonial-item" data-aos="fade-up">
                                    <div class="testimonial-post-author">
                                        <div class="testimonial-author-image">
                                            <img src="assets/images/author/testimonial-1.png" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Bansten Smith</h4>
                                            <p>WEB DEVELOPER</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-post-content">
                                        <h5 class="testimonial-post-title">Printer took a galley of type and scrambled to make book.</h5>
                                        <p>Lorem has been them indust standard
                                            unknown printer took galley text printing
                                            and typesetting industry been industry
                                            standard dummy ever.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonial-item" data-aos="fade-up">
                                    <div class="testimonial-post-author">
                                        <div class="testimonial-author-image">
                                            <img src="assets/images/author/testimonial-2.png" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Rosario Ferraro</h4>
                                            <p>MARKETER</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-post-content">
                                        <h5 class="testimonial-post-title">Printer took a galley of type and scrambled to make book.</h5>
                                        <p>Lorem has been them indust standard
                                            unknown printer took galley text printing
                                            and typesetting industry been industry
                                            standard dummy ever.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonial-item" data-aos="fade-up">
                                    <div class="testimonial-post-author">
                                        <div class="testimonial-author-image">
                                            <img src="assets/images/author/testimonial-3.png" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Bansten Smith</h4>
                                            <p>UI/UX DESIGNER</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-post-content">
                                        <h5 class="testimonial-post-title">Printer took a galley of type and scrambled to make book.</h5>
                                        <p>Lorem has been them indust standard
                                            unknown printer took galley text printing
                                            and typesetting industry been industry
                                            standard dummy ever.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonial-item" data-aos="fade-up">
                                    <div class="testimonial-post-author">
                                        <div class="testimonial-author-image">
                                            <img src="assets/images/author/testimonial-1.png" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Bansten Smith</h4>
                                            <p>UI/UX DESIGNER</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-post-content">
                                        <h5 class="testimonial-post-title">Printer took a galley of type and scrambled to make book.</h5>
                                        <p>Lorem has been them indust standard
                                            unknown printer took galley text printing
                                            and typesetting industry been industry
                                            standard dummy ever.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slider-navigation">
                        <div class="testimonial-button-next navigation-button"><i class="icofont-long-arrow-left"></i></div>
                        <div class="testimonial-button-prev navigation-button"><i class="icofont-long-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->

        <!-- Related Newsletter Area Start -->
        <div class="related-newsletter-area section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-four-box text-center">
                            <h2 class="title">{{__('Subscribe')}} {{__('For')}} {{__('Newsletter')}}</h2>
                            <p>93+ People {{__('Subscribed')}} {{__('today')}}.</p>
                            <div class="newsletter-input-box">
                                <input class="newsletter-input" type="text" placeholder="{{__('Enter your email')}}">
                                <div class="button-box">
                                    <a href="#" class="btn-primary btn-bg-4 btn-large">{{__('Subscribe')}} {{__('Now')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Related Newsletter Area End -->


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

<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');


    });


</script>

</body>

</html>
