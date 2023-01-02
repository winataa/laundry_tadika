@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div> --}}

                {{-- <div class="card-body"> --}}

                    <div class="limiter">
                        {{-- <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
                            <div class="wrap-login100"> --}}
                  
{{-- 
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
                        </div> --}}


                        <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
                            <div class="wrap-login100">
                                <form  class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                {{-- <form class="login100-form validate-form"> --}}
                                    <span class="login100-form-logo">
                                        <i class="logo_tadika">
                                            <img src="img/logo.png" alt="tadika logo" style="width: 80px;">
                                        </i>
                                    </span>
                                    {{-- <form method="POST" action="{{ route('login') }}">
                                        @csrf --}}
                    
                                    {{-- <span class="login100-form-title p-b-34 p-t-27">
                                        Log in
                                    </span> --}}
                    {{-- <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div> --}}
                <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span>
                                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                        <label for="email">{{ __('Email Address') }}</label>
                    
                                        <div>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            {{-- <span class="focus-input100" data-placeholder="&#xf207;"></span> --}}
                    
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                    
                                    {{-- <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                        <input class="input100" type="text" name="username" placeholder="Username">
                                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                    </div> --}}
                    
                                    
                                    <div class="wrap-input100 validate-input" >
                                        <label for="password" >{{ __('Password') }}</label>
                    
                                        <div>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            {{-- <span class="focus-input100" data-placeholder="&#xf191;"></span> --}}
                    
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                    
                                    <div class="contact100-form-checkbox">
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                    
                                    {{-- <div class="wrap-input100 validate-input" data-validate="Enter password">
                                        <input class="input100" type="password" name="password" placeholder="Password">
                                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                    </div>
                    
                                    <div class="contact100-form-checkbox">
                                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                        <label class="label-checkbox100" for="ckb1">
                                            Remember me
                                        </label>
                                    </div> --}}
                    
                                    {{-- <div class="container-login100-form-btn">
                                        <button class="login100-form-btn">
                                            Login
                                        </button>
                                    </div> --}}
                    
                                    <div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn">
                                                {{ __('Login') }}
                                            </button>

                                            <a href="{{ url('/')}}" class='login100-form-btn'>Cancel</a>
                    
                                            {{-- @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif --}}


                                        </div>
                    
                                        <div>
                                            @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">Don't Have Account?</a>
                                            </li>
                                        @endif
                                        </div>
                                        {{-- <div class="row mb-0">
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
                                        </div> --}}

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="limiter">
    <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
                <span class="login100-form-logo">
                    <i class="logo_tadika">
                        <img src="img/logo.png" alt="tadika logo" style="width: 80px;">
                    </i>
                </span>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                {{-- <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span> --}}
{{-- 
                <div class="wrap-input100 validate-input" >
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}

                {{-- <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div> --}}
{{-- 
                
                <div class="wrap-input100 validate-input" >
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="contact100-form-checkbox">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div> --}}

                {{-- <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div> --}}
{{-- 
                <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="row mb-0">
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
                    </div> --}}

                {{-- <div class="text-center p-t-90">
                    <a class="txt1" href="#">
                        Forgot Password?
                    </a>
                </div> --}}
            {{-- </form>
        </div>
    </div>
</div> --}}
@endsection
