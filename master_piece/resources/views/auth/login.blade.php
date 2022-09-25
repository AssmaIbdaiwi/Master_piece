@extends('layouts.app')

@section('content')



<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css" />

<!-- mega menu -->
<link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />

<!-- font awesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css" />

<!-- magnific-popup -->
<link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css" />

<!-- revolution -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />

<!-- main style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>

{{-- //// --}}
{{-- <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0"
    nonce="Op100CJo"></script> --}}
{{-- //////////// --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: rgba(16, 16, 17, 0.518)">
                <div style="color:white; border-color:white" class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
<div class="row mb-2">
        <div class="col-md-8 offset-md-4">
            <a href="{{ route('google.login') }}" class="btn btn-danger">
                <iconify-icon inline icon="akar-icons:google-contained-fill" style="color: white;" width="20" height="20">
                </iconify-icon> Login with Google
            </a>
            <a href="{{ route('facebook.login') }}" class="btn btn-primary">
                          <iconify-icon inline icon="akar-icons:facebook-fill" style="color: white;" width="20" height="20"></iconify-icon> Login with Facebook
                        </a>
        </div>
    </div>
{{-- //// --}}
    {{-- <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default"
        data-auto-logout-link="false" data-use-continue-as="false"></div> --}}


        {{-- /// --}}
                        <div class="row mb-3">
                            <label for="email" style="color:white" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input style="background-color: rgb(224, 202, 202); border-color:#e3e3e3"id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" style="color:white" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input style="background-color: rgb(202, 214, 224); border-color:#e3e3e3" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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

                                    <label style="color:white" class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
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
@endsection
