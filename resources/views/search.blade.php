@extends('layouts.app')
@section('content')
    <section>

        <div class="container">

            <section class="fw-main-row pt40">
                <div class="fw-container">
                    <h2 class="heading-decor pb20">Search Result</h2>
                    <div class="fw-row">
                    @foreach($blogs as $blog)
                        <!-- Blog item -->
                            <div class="blog-item in-row fw-col-xs-12">
                                <div class="fw-row">
                                    <div class="image fw-col-sm-4"><a href="/blog/{{$blog->slug}}"><img src="{{$blog->thumb}}" alt="{{$blog->title}}"></a></div>
                                    <div class="fw-col-sm-8">
                                        <h4><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h4>
                                        <div class="post-date">{{$blog->created_at}}</div>
                                        <p>{{substr($blog->detail,0,100)}}...</p>
                                        <a href="/blog/{{$blog->slug}}" class="button-style2 gray min">read more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Blog item -->
                        @endforeach

                        @if(count($blogs)==0)
                            <div class="span card-body shadow-lg bg-warning"> No Result Found by this keyword <br>      <a href="/"> Goto Home </a> | or Search different keyword on the top navigation. </div>

                        @endif

                    </div>
                    <!-- Pagination -->
                    <div class="pagination">
                        <a href="javascript:void(0);" class="active">1</a>
                        <a href="javascript:void(0);">2</a>
                        <a href="javascript:void(0);">3</a>
                        <a href="javascript:void(0);">4</a>
                        <a href="javascript:void(0);"><i class="icon-font icon-right-arrow"></i></a>
                    </div>
                    <!-- END Pagination -->
                </div>
            </section>
        </div>
    </section>
@endsection
