@extends('layouts.auth')
@section('content')

<style>
    .btn-hoover {
        width:100%;
        font-weight:bold;
        background-color:rgba(125,64,244,1);
        border:3px solid rgba(125,64,244,1);
        color:white
    }
    .btn-hoover:hover {
        background-color:white;
        color:rgba(125,64,244,1);
        border:3px solid rgba(125,64,244,1);
    }

</style>


<x-alert></x-alert>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 ">
            <div class="card shadow " style = "background-color:rgb(35, 35, 49);   border-radius:10px; " >
                <div class = " text-white  text-center my-3"   >
                    <p> <img src="{{asset('img/flask.png'); }}" alt="logo"   width="130px" height="130px" ></p>
                    <h1 style = "margin-bottom:0px;" >NEXATH Laboratory</h1>
                    <h5>Wellcome Back</5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row justify-content-center  mb-3">
                            <div class="col-md-10">
                                <label for="email" class="   text-white text-md-end mb-1 ">{{ __('Username or Email Address') }}</label>
                                <input id="email" type="email"   class="form-control  form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center mb-4">
                            <div class="col-md-10 ">
                                <label for="password" class="   text-white text-md-end mb-1 ">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center mb-3">
                            <div class="col-md-10   d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Save Password') }}
                                    </label>
                                </div>

                                <div class="form-check">
                                @if (Route::has('password.request'))
                                    <a class="form-check-label text-white" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                                </div>

                            </div>
                        </div>

                        <div class="row mb-2" style = "margin-top:40px;">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn btn-lg btn-hoover"  >
                                    {{ __('Login') }}
                                </button>


                            </div>
                        </div>


                        <div class="row mb-3" style = "margin-top:30px;">
                            <div class="col-md-10 offset-md-1 text-center">
                                    <label class="form-check-label  text-white" for="remember">
                                        {{ __(" Don't have a account ? Sign up ") }}
                                    </label>


                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
