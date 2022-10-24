@extends('layouts.app')

@section('title','List Blog in '.$category->title)
@section('content')

    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">{{$category->title}}</h2>
            <div class="fw-row">

                @foreach($blogs->chunk(3) as $chunk)

                    <div class="fw-row">
                        @foreach($chunk as $blog)
                            <div class="blog-item fw-col-md-4">
                                <div class="fw-row">
                                    <div class="image fw-col-sm-5 fw-col-md-12">
                                        <a href="/blog/{{$blog->slug}}">
                                            <img src="{{$blog->thumb}}" alt="{{$blog->title}}">
                                        </a></div> <div class="fw-col-sm-7 fw-col-md-12"><h4>
                                            <a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h4>
                                        <div class="post-date">{{$blog->created_at->diffForHumans()}}</div>
                                        <p> {{substr(strip_tags($blog->detail),0,100)}}...</p>
                                        <a href="/blog/{{$blog->slug}}" class="button-style2 gray min">{{__('read more')}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            @endforeach



            <!-- Post Pagination -->
                <div class="post-pagination d-flex justify-content-center">

                    {{ $blogs->links('vendor.pagination.bootstrap-4') }}

                </div>
                <!-- End of Post Pagination -->
            </div>

        </div>
    </section>


@endsection
