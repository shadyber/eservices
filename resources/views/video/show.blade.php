@extends('layouts.app')

@section('title',$video->title)
@section('image','https://teleaddis.com/'.$video->thumb_big)
@section('detail',$video->detail)

@section('content')

    <div class="blog-details-wrapper section-space--ptb_80">
        <div class="container">
            <div class="row row--17">
                <div class="blog-details-col-8">
                    <!-- blog details Post Start -->
                    <div class="blog-details-post-wrap">
                        <div class="blog-details-thum">

                            <div class="single-video  mdi-margin" width="60%"  id="player" >
                                <iframe width="100%"
                                        height="315"
                                        src="https://www.youtube.com/embed/{{$video->videoId}}?start=5"
                                        frameborder="0"
                                        allow="accelerometer;
                                     autoplay;
                                     encrypted-media;
                                      gyroscope;
                                       picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="blog-details-post-content">
                            <div class="blog-details-meta-box">
                                <div class="post-meta-left-side mb-2">
                                    <div class="trending-blog-post-category">
                                        <a href="#">{{$video->Category->title}}</a>
                                    </div>
                                    <div class="following-blog-post-author">
                                        By <a href="#">{{$video->user->name}}</a>
                                    </div>
                                </div>

                                <div class="post-mid-side mb-2">
                                            <span class="post-meta-left-side">
                                            <span class="post-date">
                                                <i class="icofont-ui-calendar"></i>
                                                <a href="#">{{$video->created_at->diffForHumans()}}</a>
                                            </span>
                                            </span>
                                    <span>10 min read</span>
                                </div>

                                <div class="post-meta-right-side mb-2">
                                    <a href="#"><img src="/assets/images/icons/small-bookmark.png" alt=""></a>
                                    <a href="#"><img src="/assets/images/icons/heart.png" alt=""></a>
                                </div>
                            </div>
                            <h4 class="following-blog-post-title">
                                <a href="#">{{$video->title}}
                                </a>
                            </h4>



                        </div>
                        <div>{{$video->detail}}</div>



                        <div class="container">
                            <div class="row row--17">

                                @foreach(\App\Models\Video::all()->chunk(3) as $chunk)

                                    <div class="row">
                                        @foreach($chunk as $video)
                                            <div class="col-md-4 col-sm-6">
                                                <!-- Post -->
                                                <div class="post-default">
                                                    <div class="post-thumb">
                                                        <a href="/video/{{$video->slug}}">
                                                            <img src="{{$video->thumb_small}}" alt="{{$video->title}}" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="post-data">
                                                        <!-- Category -->
                                                        <div class="cats"><a href="/category/{{$video->category->slug}}"> {{$video->category->title}} </a></div>
                                                        <!-- Title -->
                                                        <div class="title">
                                                            <h4><a href="/video/{{$video->slug}}">{{$video->title}}</a></h4>
                                                        </div>
                                                        <!-- Post Desc -->
                                                        <div class="desc">
                                                            <p>
                                                                {{ substr(strip_tags($video->detail),0,70 ) }}...
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End of Post -->
                                            </div>

                                        @endforeach
                                    </div>
                                @endforeach




                            </div>
                        </div>




                    </div><!-- blog details Post End -->
                </div>
                <div class="blog-details-col-4">
                    <div class="following-author-area">
                        <div class="author-image">
                            <img src="assets/images/author/author-01.png" alt="">
                        </div>
                        <div class="author-title">
                            <h4><a href="#">TeleAddis</a></h4>
                            <p>Author, Super Admin</p>
                        </div>
                        <div class="author-details">
                            <p>Teleaddis provide daily update on technology .</p>

                            <div class="author-post-share">
                                <ul class="social-share-area">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-skype"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>

                            <div class="button-box">
                                <a href="#" class="btn">View Profile <i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Hero Category Area Start -->
                    <div class="blog-details-category-area mt-5">
                        @foreach(\App\Models\BlogCategory::allCategories() as $category)
                            <a class="single-hero-category-item">
                                <img src="{{$category->icon}}" alt="">
                                <div class="hero-category-inner-box">
                                    <h3 class="title">{{$category->title}}</h3>
                                    <i class="icon icofont-long-arrow-right"></i>
                                </div>
                            </a>
                        @endforeach

                    </div><!-- Hero Category Area End -->

                    <!-- Latest Post Area Start -->
                    <div class="latest-post-inner-wrap mt-5">
                        <div class="latest-post-header">
                            <div class="section-title">
                                <h4>Latest Post</h4>
                            </div>
                            <div class="latest-post-slider-navigation">
                                <div class="latest-post-button-prev navigation-button" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-a1092155aa14feb9d"><i class="icofont-long-arrow-left"></i></div>
                                <div class="latest-post-button-next navigation-button" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a1092155aa14feb9d"><i class="icofont-long-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-container latest-post-slider-active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-a1092155aa14feb9d" aria-live="polite" style="transform: translate3d(-285px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 285px;">
                                    <div class="latest-post-box">

                                    @foreach(\App\Models\Blog::lastN(5) as $post)
                                        <!-- Single Latest Post Start -->
                                            <div class="single-latest-post">
                                                <div class="latest-post-thum">
                                                    <a href="#">
                                                        <img src="{{$post->thumb}}" alt="{{$post->title}}">
                                                    </a>
                                                </div>
                                                <div class="latest-post-content">
                                                    <h6 class="title"><a href="#!">{{$post->title}}</a>
                                                    </h6>
                                                    <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="icofont-ui-calendar"></i>
                                                            <a href="#">{{$post->created_at->diffForHumans()}}</a>
                                                        </span>
                                                        <span>10 min read</span>
                                                    </div>
                                                </div>
                                            </div><!-- Single Latest Post End -->
                                        @endforeach

                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active swiper-slide-duplicate-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="2 / 3" style="width: 285px;">
                                    <div class="latest-post-box">

                                    @foreach(\App\Models\Blog::popularN(5) as $post)
                                        <!-- Single Latest Post Start -->
                                            <div class="single-latest-post">
                                                <div class="latest-post-thum">
                                                    <a href="#">
                                                        <img src="{{$post->thumb}}" alt="{{$post->title}}">
                                                    </a>
                                                </div>
                                                <div class="latest-post-content">
                                                    <h6 class="title"><a href="#!">{{$post->title}}</a>
                                                    </h6>
                                                    <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="icofont-ui-calendar"></i>
                                                            <a href="#">{{$post->created_at->diffForHumans()}}</a>
                                                        </span>
                                                        <span>10 min read</span>
                                                    </div>
                                                </div>
                                            </div><!-- Single Latest Post End -->
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="3 / 3" style="width: 285px;">
                                    <div class="latest-post-box">

                                    @foreach(\App\Models\Blog::trandinN(5) as $post)
                                        <!-- Single Latest Post Start -->
                                            <div class="single-latest-post">
                                                <div class="latest-post-thum">
                                                    <a href="#">
                                                        <img src="{{$post->thumb}}" alt="{{$post->title}}">
                                                    </a>
                                                </div>
                                                <div class="latest-post-content">
                                                    <h6 class="title"><a href="#!">{{$post->title}}</a>
                                                    </h6>
                                                    <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="icofont-ui-calendar"></i>
                                                            <a href="#">{{$post->created_at->diffForHumans()}}</a>
                                                        </span>
                                                        <span>10 min read</span>
                                                    </div>
                                                </div>
                                            </div><!-- Single Latest Post End -->
                                        @endforeach
                                    </div>
                                </div></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

                    </div> <!-- Latest Post Area End -->


                </div>
            </div>

        </div>
    </div>


@endsection




