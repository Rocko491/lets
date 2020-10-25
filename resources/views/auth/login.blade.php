@extends('layouts.app')

@section('content')

<!-- Pageloader -->
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<div class="login-wrapper">

    <!-- Main Wrapper -->
    <div class="login-wrapper columns is-gapless">
        <!--Left Side (Desktop Only)-->
        <div class="column is-6 is-hidden-mobile hero-banner" >
            <div class="hero is-fullheight is-login" style="background-image: url({{ asset('img/1.jpg') }}); background-position: center center; background-repeat: no-repeat; background-size: cover;">

            </div>
        </div>
        <!--Right Side-->
        <div class="column is-6">
            <div class="hero form-hero is-fullheight">
                <!--Logo-->
                <div class="logo-wrap">
                    <div class="wrap-inner">
                        <img src="{{ asset('img/logo.jpeg') }}" alt="">
                    </div>
                </div>
                <!--Login Form-->
                <div class="hero-body">
                    <div class="form-wrapper">
                        <!--Avatar-->
                        <div class="avatar">
                            <div class="badge">
                                <i data-feather="check"></i>
                            </div>
                            <img src="{{ asset('img/logo.jpeg') }}" data-demo-src="assets/img/logo.jpeg" alt="">
                        </div>
                        <div class="sign_in_options">
                            <div class="text">
                                Sign in with
                            </div>
                            <ul class="login-icons">
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            </ul>
                            <div class="text">or</div>
                        </div>
                        <!--Form-->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="login-form">

                                <!--Field-->
                                <div class="field field-group">
                                    <label>Email</label>
                                    <div class="control has-icon">
                                        <input id="email" type="email" class="input is-fade form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="input-icon">
                                            <i data-feather="mail"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input id="password" type="password" class="input password-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="input-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button type="submit" class="button is-solid primary-button raised is-rounded is-fullwidth">{{ __('Submit') }}</button>
                                    </div> <br/>
                                    <div class="control">
                                        <a class="button is-solid primary-button raised is-rounded is-fullwidth" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
