@extends('layouts.site')

@section('content')

<!-- Begin | Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
<div id="wrapper" data-scrollable="true">

    <header id="landing-header">
        <div class="container d-flex align-items-center py-3">
            <a href="{{ lurl('/') }}" class="brand">
                <img src="{{ url('assetss/images/logos/logo.svg') }}" alt="listen-app">
            </a>

            <ul class="header-auto-options ml-auto d-flex align-items-center">
                <li><a href="#" class="btn btn-pill btn-air btn-sm btn-dark" data-toggle="modal" data-target="#quickLogin">Sign in</a></li>
                <li><a href="{{ lurl(trans('routes.register')) }}" class="btn btn-pill btn-air btn-sm btn-danger">Sign up</a></li>
                
            </ul>
        </div>
    </header>

    <!-- Begin | Landing Page Banner [[ Find at scss/framework/base/pages/landing/landing.scss ]] -->
    <div class="banner landing-banner bg-landing" style="margin-top: -28px; padding-top: 120px; height: 42rem;">
        <div class="container">
            <div class="row">
                
				@if (isset($errors) and $errors->any())
					<div class="col-xl-12">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<ul class="list list-check">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif

				@if (session('status'))
					<div class="col-xl-12">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<p>{{ session('status') }}</p>
						</div>
					</div>
				@endif

				@if (session('email'))
					<div class="col-xl-12">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<p>{{ session('email') }}</p>
						</div>
					</div>
				@endif
					
				@if (session('phone'))
					<div class="col-xl-12">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<p>{{ session('phone') }}</p>
						</div>
					</div>
				@endif
					
				@if (session('login'))
					<div class="col-xl-12">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<p>{{ session('login') }}</p>
						</div>
					</div>
				@endif

				@if (Session::has('flash_notification'))
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-12">
								@include('flash::message')
							</div>
						</div>
					</div>
				@endif

            </div>
        </div>

        <!-- Begin | Login Modal (SignUp/pro)-->
        <div tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0 pb-0">
                    </div>
                    <h6 class="modal-title text-center mb-3">Password</h6>
                    <div class="modal-body">
                        <form id="pwdForm" role="form" method="POST" action="{{ lurl('password/email') }}" class="mx-4 pb-5">
                            {!! csrf_field() !!}
                            <?php $loginError = (isset($errors) and $errors->has('login')) ? ' is-invalid' : ''; ?>
                            <div class="form-group">
                                <input type="text" name="login" id="login" autofocus="" class="form-control input-md{{ $loginError }}" placeholder="Email" value="{{ old('login') }}">
                            </div>

                            @includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.tools.recaptcha', 'layouts.inc.tools.recaptcha'], ['noLabel' => true])

                            <button id="pwdBtn" type="submit" class="btn btn-block btn-bold btn-air btn-info load-page"><i class="fa fa-user-plus"></i> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End | signUp Modal -->
    </div>
    <!-- End | Landing Page Banner -->

    <!-- Begin | Login Modal SignIn-->
    <div class="modal fade" id="quickLogin" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 pb-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h6 class="modal-title text-center mb-3" id="loginTitle">Login</h6>
                <div class="modal-body">
                    @if (isset($errors) and $errors->any() and old('quickLoginForm')=='1')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <ul class="list list-check">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ lurl(trans('routes.login')) }}" method="POST" class="mx-4 pb-5">
                        {!! csrf_field() !!}
                        <div class="social-login">
                            <a href="{{ lurl('auth/facebook') }}" class="w-100 btn btn-social btn-facebook btn-default-air">
                                <span class="btn-content">
                                    <i class="ion-logo-facebook"></i>
                                    <span class="pl-2">Login With Facebook</span>
                                </span>
                            </a>
                            <a href="{{ lurl('/auth/google') }}" class="w-100 mt-3 btn btn-social btn-google btn-default-air">
                                <span class="btn-content">
                                    <i class="ion-logo-google"></i>
                                    <span class="pl-2">Login With Google</span>
                                </span>
                            </a>
                            <a href="{{ lurl('/auth/twitter') }}" class="w-100 mt-3 btn btn-social btn-twitter btn-default-air">
                                <span class="btn-content">
                                    <i class="ion-logo-twitter"></i>
                                    <span class="pl-2">Login With Twitter</span>
                                </span>
                            </a>
                            <a href="{{ lurl('/auth/linkedin') }}" class="w-100 mt-3 btn btn-social btn-linkedin btn-default-air">
                                <span class="btn-content">
                                    <i class="ion-logo-linkedin"></i>
                                    <span class="pl-2">Login With Linkedin</span>
                                </span>
                            </a>
                        </div>
                        <?php
                            $loginValue = (session()->has('login')) ? session('login') : old('login');
                            $loginField = getLoginField($loginValue);
                            if ($loginField == 'phone') {
                                $loginValue = phoneFormat($loginValue, old('country', config('country.code')));
                            }
                        ?>
                        <?php $loginError = (isset($errors) and $errors->has('login')) ? ' is-invalid' : ''; ?>
                        <div class="form-group">
                            <input type="text" id="mLogin" name="login" class="form-control{{ $loginError }}" placeholder="Email" value="{{ $loginValue }}">
                        </div>
                        <?php $passwordError = (isset($errors) and $errors->has('password')) ? ' is-invalid' : ''; ?>
                        <div class="form-group">
                            <input type="password" id="mPassword" name="password" class="form-control{{ $passwordError }}" placeholder="Password" autocomplete="off">
                        </div>
                        <input type="hidden" name="quickLoginForm" value="1">
                        <button type="submit" id="loginBtn" class="btn btn-block btn-bold btn-air btn-info load-page"><i class="fa fa-user"></i> LOGIN</button>
                        <a href="{{ lurl('password/reset') }}" class="btn btn-link">Forgot your password?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End | Login Modal -->

    <!-- Begin | Footer [[ Find at scss/framework/base/footer/footer.scss ]] -->
    <footer id="footer" class="bg-img">
        <div class="footer-content">
            <a href="#" class="email">Jellybeats</a>
            <div class="platform-btn-inline">
                <a href="#" class="btn btn-dark btn-air platform-btn">
                    <i class="ion-ios-cloud-upload"></i>
                    <div class="platform-btn-info">
                        <span class="platform-desc"></span>
                        <span class="platform-name">Upload</span>
                    </div>
                </a>
              <a href="#" class="btn btn-danger btn-air platform-btn">
                    
                    <i class="ion-ios-headset"></i>
                    
                    <div class="platform-btn-info">
                        <span class="platform-desc"></span>
                        <span class="platform-name">Listen</span>
                    </div>
                </a>
            </div>
        </div>
    </footer>
    <!-- End | Footer -->

</div>
<!-- End | Wrapper -->

@endsection

@section('afterscript')
<script>
$(document).ready(function () {
    $("#signupForm").modal();
})
</script>
@endsection