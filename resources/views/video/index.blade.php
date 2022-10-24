@extends('layouts.app')
@section('title','Videos Index')
@section('content')



    <div class="blog-details-wrapper section-space--ptb_80">
        <div class="container">
            <div class="row row--17">

            @foreach($videos->chunk(3) as $chunk)

            <div class="row">
                @foreach($chunk as $video)
                    <div class="col-md-4 col-sm-6">
                        <!-- Post -->
                        <div class="post-default">
                            <div class="post-thumb">
                                <a href="/video/{{$video->slug}}">
                                    <img src="{{$video->thumb_small}}" alt="{{__($video->title)}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-data">
                                <!-- Category -->
                                <div class="cats"><a href="/category/{{$video->category->slug}}"> {{__($video->category->title)}} </a></div>
                                <!-- Title -->
                                <div class="title">
                                    <h4><a href="/video/{{$video->slug}}">{{__($video->title)}}</a></h4>
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
    </div>


    {{ $videos->links('vendor.pagination.bootstrap-4') }}

@endsection
