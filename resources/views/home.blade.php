@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body row">

                    <div class="col-md-4">

                        <div class="d-flex align-items-center">
                            <div class="image"> <img src="{{\Illuminate\Support\Facades\Auth::user()->photo}}" class="rounded" width="255">  </div>
                            <div class="ml-3 w-100">{{\Illuminate\Support\Facades\Auth::user()->name}}
                                <h4 class="mb-0 mt-0">{{\Illuminate\Support\Facades\Auth::user()->name}}</h4> <span>{{\Illuminate\Support\Facades\Auth::user()->tel}}</span>
                                <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                                    <div class="d-flex flex-column"> <span class="articles">Articles</span> <span class="number1">38</span> </div>
                                    <div class="d-flex flex-column"> <span class="followers">Followers</span> <span class="number2">980</span> </div>
                                    <div class="d-flex flex-column"> <span class="rating">Rating</span> <span class="number3">8.9</span> </div>
                                </div>
                                <div class="button mt-2 d-flex flex-row align-items-center"> <button class="btn btn-sm btn-outline-primary w-100">Chat</button> <button class="btn btn-sm btn-primary w-100 ml-2">Follow</button> </div>
                            </div>
                        </div>




                    </div>

                    <div class="col-md-8">
                        <h2>Basic Information</h2>

                        <form action="{{url('/profile')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" value={{Auth::user()->name}}>
                            </div>

                            <div class="form-group">
                                <input type="tel" name="tel" class="form-control" placeholder="Telephone Number" value="{{Auth::user()->tel}}">
                            </div>

                            <div class="form-group">
                                <input type="submit"   class="form-control btn-outline-dark" value="Save">
                            </div>

                        </form>
                        <hr>


                        <h2>Change Password</h2>

                        <form action="/password" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="password" name="old_password" class="form-control" placeholder="Old Password">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="New Password">
                            </div>

                            <div class="form-group">
                                <input type="passwrod" name="confirm_password" class="form-control" placeholder="Confirm Password">
                            </div>

                            <div class="form-group">
                                <input type="submit"   class="form-control btn-outline-dark" value="Update">
                            </div>

                        </form>




                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

