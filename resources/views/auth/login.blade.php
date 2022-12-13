@extends('layouts.auth')
@section('title', 'Login')
@section('content')

    <link rel="stylesheet" href="{{ URL::to('assets/css/auth-login.css') }}">


    <div class="login-area">
        <div class="login">
            <div class="header d-flex justify-content-center">
                <img src="{{ URL::to('/assets/image/logos/logo.png') }}" alt="LinkedIn" title="LinkedIn">
            </div>
            <div class="form-area">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1 class="mb-4">Login</h1>

                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="your@email.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{ old('password') }}" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group ml-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>


                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-end" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="footer mt-4 text-right">
                        <p>Don't have an account? <a href="/register"><strong>Register</strong></a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
