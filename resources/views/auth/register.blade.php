@extends('layouts.auth')
@section('title', 'Register')
@section('content')

    <link rel="stylesheet" href="{{ URL::to('assets/css/auth-register.css') }}">


    <div class="login-area">
        <div class="login">
            <div class="header d-flex justify-content-center">
                <img src="{{ URL::to('/assets/image/logos/logo.png') }}" alt="LinkedIn" title="LinkedIn">
            </div>
            <div class="form-area">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 class="mb-4">Register</h1>

                    <div class="form-group">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="your@email.com" value="{{ old('email') }}" required autocomplete="email">
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

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm your password" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group ml-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>


                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>

                    <div class="footer mt-4 text-right">
                        <p>Already have an account? <a href="/login"><strong>Login</strong></a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
