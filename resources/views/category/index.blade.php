@extends('layouts.admin')
@section('content')


    <form action="/category" method="post" class="form-horizontal form-material">
        @csrf
        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Title')}}</label>
            <div class="col-md-12 border-bottom p-0">
                <input type="text" name="title" placeholder="{{__('Title')}}" class="form-control p-0 border-0   @error('title') is-invalid @enderror"> </div>
            @error('title')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>



        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Detail')}}</label>
            <div class="col-md-12 border-bottom p-0">
                <textarea rows="5" name="detail" class="form-control p-0 border-0   @error('detail') is-invalid @enderror"></textarea>
            </div>
            @error('detail')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Icon')}}</label>
            <div class="col-md-12 border-bottom p-0">
                <input type="text" name="icon" placeholder="{{__('Icon')}}" class="form-control p-0 border-0     @error('icon') is-invalid @enderror" value="fa fa-category"> </div>
            @error('icon')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>


        <div class="form-group mb-4">
            <div class="col-sm-12">
                <button class="btn btn-success">Post Category</button>
            </div>
        </div>
    </form>

@endsection
