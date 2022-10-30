@extends('layouts.app')
@section('content')

    <div class="blog-details-wrapper section-space--ptb_80">
        <div class="container">
            <div class="fb-like" data-href="https://EServices.com/blog"
                 data-width="10"
                 data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>


            <div class="row row--17">


                @foreach($blogs->chunk(3) as $chunk)

                    <div class="row">
                        @foreach($chunk as $blog)

                        <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Single Following Post Start -->
                    <div class="single-following-post aos-init aos-animate" data-aos="fade-up">
                        <a href="/blog/{{$blog->slug}}" class="following-post-thum">
                            <img src="{{$blog->thumb}}" alt="{{__($blog->title)}}">
                        </a>
                        <div class="following-post-content">
                            <div class="following-blog-post-top">
                                <div class="trending-blog-post-category">
                                    <a href="/blog/{{$blog->slug}}" class="business">{{__($blog->Category->title)}}</a>
                                </div>
                                <div class="following-blog-post-author">
                                    By <a href="#">{{$blog->user->name}}</a>
                                </div>
                            </div>
                            <h5 class="following-blog-post-title">
                                <a href="/blog/{{$blog->slug}}">{{__($blog->title)}}
                                </a>
                            </h5>
                            <div class="following-blog-post-meta">
                                <div class="post-meta-left-side">
                                            <span class="post-date">
                                            <i class="icofont-ui-calendar"></i>
                                            <a href="#">0{{$blog->created_at->diffForHumans()}}</a>
                                        </span>
                                    <span>10 min read</span>
                                </div>
                                <div class="post-meta-right-side">
                                    <a href="#"><img src="/assets/images/icons/small-bookmark.png" alt=""></a>
                                    <a href="#"><img src="/assets/images/icons/heart.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- Single Following Post End -->
                </div>

                        @endforeach
                    </div>
                @endforeach
                    {{ $blogs->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>


@endsection
