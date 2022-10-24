@extends('layouts.app')
@section('title','Login to Read Amazing Contens in teladdis.com')

@section('image','https://teleAddis.com/images/banner.jpg')
@section('detail','contents is ready to for reading... login for access.')
@section('content')
        <div class="container m-3">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>
                            <p class="p-15 offset-2">Once you subscribed to our website or service you can use for free for 3 days then will charge 2 birr per day untill you send unsubscription request .|</p>

                        <div class="card-body">
                          <div class="row">

                              <div class="col-md-10">
                                  <h3>Login Using Your Phone Number</h3>
                                  <form method="POST" action="{{ route('login') }}">
                                      @csrf

                                      <div class="form-group row pt-2">
                                          <label for="tel" class="col-md-4 col-form-label text-md-right single-input" >{{ __
                                          ('Phone Number') }}</label>

                                          <div class="col-md-6">
                                              <input id="tel" type="tel" class="form-control @error('tel') is-invalid
        @enderror" name="tel" placeholder="09 -- -- --" required   autofocus>
                                              <spnan><small>Use local phone number format strating with '09'</small></spnan>

                                              @error('tel')
                                              <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                              @enderror
                                          </div>
                                      </div>

                                      <div class="form-group row pt-2">
                                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                          <div class="col-md-6">
                                              <input id="password" type="password" class="form-control single-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                              @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                              @enderror
                                          </div>
                                      </div>

                                      <div class="form-group row">
                                          <div class="col-md-6 offset-md-4">
                                              <div class="form-check">
                                                  <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                  <label class="form-check-label" for="remember">
                                                      {{ __('Remember Me') }}
                                                  </label>

                                                  <div class="col-md-10">
                                                      <input type="checkbox" value="I Agree To The Terms and Conditions."> I Agree To The Terms and Conditions.
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group row mb-0">
                                          <div class="col-md-8 offset-md-4">
                                              <button type="submit" class="btn btn-primary">
                                                  {{ __('Login') }}
                                              </button>

                                              @if (Route::has('password.request'))
                                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                                      {{ __('Forgot Your Password?') }}
                                                  </a>
                                              @endif
                                          </div>
                                      </div>
                                  </form>

                              </div>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
