@extends('layouts.app')
<style>
.img
{
    width:100px; 
    height:100px;
      display: block;
       margin-left: auto; 
       margin-right: auto;
}

    </style>
@section('content')
<div class="container">
    <div class="row login-box-main">
    
        <div class="col-md-4">
         
            <div class="card" >
                <div class="card-header ">   <img src="{{asset('frontend/ironbox_logo.png')}}"  class="img" alt="..."></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group{{ $errors->has('email') || $errors->has('username') ? ' has-error' : '' }} row">
                        <div class="col-md-12">
                            <label for="username" class=" col-form-label text-md-right">{{ __('E-Mail or Username') }}</label>
                           
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6"> -->


                                 <!-- <input id="phone" type="string" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" autofocus>
                                  @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->

                                 <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                              
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group row">
                        <div class="col-md-12">
                            <label for="password" class=" col-form-label text-md-right ">{{ __('Password') }}</label>

                          
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        @if (Route::has('password.request'))
                                    <a class="float-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif 
                                </div></div>
                        <div class="form-group row">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div></div>
                                <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary btn-sm float-right">
                                    {{ __('Log In') }}
                                </button>
                            </div>
                        </div>
                  
                         <!--<div class="form-group row mb-0">
                            <div class="col-md-8 ">
                            <button type="submit" class="btn btn-primary btn-sm ">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif 
                            </div>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
