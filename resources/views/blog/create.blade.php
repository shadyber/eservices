@extends('layouts.admin')

@section('title','New Blog')
@section('content')


    <form action="/blog" method="post" class="form-horizontal form-material" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Title')}}</label>
            <div class="col-md-12 border-bottom p-0">
                <input type="text" name="title" placeholder="{{__('Title')}}" class="form-control p-0 border-0   @error('title') is-invalid @enderror" required>
            </div>
            @error('title')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Photo')}}</label>
            <div class="col-md-12 border-bottom p-0   @error('photo') is-invalid @enderror">
                <input type="file" name="photo"  class="form-control p-0 border-0" required>
                @error('photo')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Tags')}}</label>
            <div class="col-md-12 border-bottom p-0">
                <input type="text" name="tags" placeholder="{{__('Tags')}}," name="tags" class="form-control p-0 border-0   @error('tags') is-invalid @enderror">
            </div>
            @error('tags')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

          <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Language')}}</label>
            <div class="col-md-12 border-bottom p-0">
                <select name="lang" placeholder="{{__('Language')}}," name="lang" class="form-control p-0 border-0   @error('lang') is-invalid @enderror">
                    {{ Config::get('languages')[App::getLocale()] }}
                    <option value="en">English</option>

                    @foreach (Config::get('languages') as $lang => $language)

                            <option value="{{$lang}}"> {{__($language)}}</option>

                    @endforeach
                </select>
            </div>
            @error('lang')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Detail')}}</label>
            <div class="col-md-12 border-bottom p-0">
                <textarea rows="5" name="detail" class="form-control p-0 border-0 ckeditor   @error('detail') is-invalid @enderror"></textarea>
            </div>
            @error('detail')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
        <div class="form-group mb-4">
            <label class="col-sm-12">{{__('Select Category')}}</label>
            <div class="col-sm-12 border-bottom">
                <select name="blog_category_id" class="form-control p-0 border-0   @error('blog_category_id') is-invalid @enderror" name="blog_category_id" required>
                    @foreach(\App\Models\BlogCategory::allCategories() as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                @error('blog_category_id')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group mb-4">
            <div class="col-sm-12">
                <button class="btn btn-success">{{__('Post')}}</button>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-md-12">
            <table class="table  w-auto" width="100%">
                <th>
                    <tr>
                        <td>id</td>
                        <td>{{__('Image')}}</td>
                        <td>{{__('Title')}}</td>
                        <td>{{__('Detail')}}</td>
                        <td>{{__('Action')}}</td>
                    </tr>

                </th>


                @foreach(App\Models\Blog::Paginate(15) as $blog)
                    <tr>
                        <td>{{$blog->id}}</td>
                        <td><img src="{{$blog->thumb}}" alt="{{$blog->title}}" width="32px" class="img img-thumbnail"></td>
                        <td>{{$blog->title}}</td>
                        <td>{{substr(strip_tags($blog->detail),0,100)}}</td>
                        <td>
                            <a href="/blog/{{$blog->id}}/edit" class="btn btn-primary"> {{__('Edit')}}</a>
                            <form id="delete-form" method="POST" class="form-inline" action="/blog/{{$blog->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <div class="form-group">
                                    <input type="submit" class="btn btn-sm btn-danger" value="{{__('Delete')}}">
                                </div>
                            </form>

                            <a href="/blog/{{$blog->slug}}" class="btn btn-info" target="_blank"> {{__('Show')}}</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>

    </div>
@endsection
@section('scripts')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });

    </script>
@endsection
