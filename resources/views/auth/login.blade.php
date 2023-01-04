@extends('layouts.app')

@section('content')

<div class="limiter">
    <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-logo">
                    <i class="logo_tadika">
                        <img src="img/logo.png" alt="tadika logo" style="width: 80px;">
                    </i>
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Enter email">
                    <label class="label_atas"for="email"></label>

                    <div>
                        <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Email Address">
                        {{-- <span class="focus-input100" data-placeholder="&#xf207;"></span> --}}
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="wrap-input100 validate-input" data-validate = "Enter password">
                    <label class="label_atas"for="password"></label>

                    <div>
                        <input id="password" type="password" class="input100" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus  placeholder="Password Address">
                        {{-- <span class="focus-input100" data-placeholder="&#xf207;"></span> --}}
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
                        </button>
                        <a href="{{ url('/')}}" class='login100-form-btn'>Cancel</a>

                 </div>

                    <div>
                        @if (Route::has('register'))
                        <li class="nav-item" style="text-align: center">
                            <br>
                            <p style="color: aliceblue">Don't Have Any Account?</p>
                            <a style="color: aliceblue" class="nav-link" href="{{ route('register') }}">Sign Up Now!</a>
                        </li>
                    @endif
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
